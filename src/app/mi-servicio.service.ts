import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/internal/Observable';
import { Pedido } from './models/pedido';
import { Zapatilla } from './models/zapatilla';
import { ZapatillaCarrito } from './models/zapatillaCarrtio';

@Injectable({
  providedIn: 'root',
})
export class MiServicioService {
  ruta_server = '/server/';

  constructor(private http: HttpClient) {}

  obtenerZapatillas(): Observable<Zapatilla[]> {
    return this.http.get<Zapatilla[]>(
      this.ruta_server + 'obtenerZapatillas.php'
    );
  }

  obtenerZapatillaPorId(id: number): Observable<Zapatilla> {
    return this.http.get<Zapatilla>(
      this.ruta_server + 'obtenerZapatillaPorId.php?id=' + id
    );
  }

  agregarAlCarrito(idZapatilla: number, cantidad: number): Observable<any> {
    return this.http.post<any>(
      this.ruta_server + 'agregarProductoCarrito.php',
      { id: idZapatilla, cantidad }
    );
  }

  actualizarCantidadCarrito(
    idZapatilla: number,
    cantidad: number
  ): Observable<any> {
    return this.http.post<any>(
      this.ruta_server + 'actualizarCantidadCarrito.php',
      { id: idZapatilla, cantidad }
    );
  }

  obtenerZapatillasCarrito(): Observable<ZapatillaCarrito[]> {
    return this.http.get<ZapatillaCarrito[]>(
      this.ruta_server + 'obtenerZapatillasCarrito.php'
    );
  }

  vaciarCarrito(): Observable<String> {
    return this.http.delete<string>(this.ruta_server + 'vaciarCarrito.php');
  }

  registrarPedido(p: Pedido): Observable<string> {
    return this.http.post<string>(this.ruta_server + 'registrarPedido.php', p);
  }

  eliminarProductoCarrito(id: number): Observable<any> {
    return this.http.post<any>(
      this.ruta_server + 'eliminarProductoCarrito.php',
      { idProducto: id }
    );
  }
}
