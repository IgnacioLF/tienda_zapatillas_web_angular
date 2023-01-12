import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/internal/Observable';
import { Zapatilla } from './models/zapatilla';

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
}
