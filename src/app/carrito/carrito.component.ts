import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { MiServicioService } from '../mi-servicio.service';
import { ZapatillaCarrito } from '../models/zapatillaCarrtio';

@Component({
  selector: 'app-carrito',
  templateUrl: './carrito.component.html',
  styleUrls: ['./carrito.component.css'],
})
export class CarritoComponent {
  zapatillasCarrito: ZapatillaCarrito[] = {} as ZapatillaCarrito[];

  constructor(private miServicio: MiServicioService, private router: Router) {}

  ngOnInit(): void {
    this.listarZapatillasCarrito();
  }

  listarZapatillasCarrito(): void {
    this.miServicio
      .obtenerZapatillasCarrito()
      .subscribe((res) => (this.zapatillasCarrito = res));
  }

  vaciarCarrito(): void {
    this.miServicio
      .vaciarCarrito()
      .subscribe((res) =>
        res == 'ok'
          ? (this.zapatillasCarrito = [])
          : alert('No se puedo vaciar el carrito')
      );
  }
  realizarPedido(): void {
    if (
      this.zapatillasCarrito.length === undefined ||
      this.zapatillasCarrito.length == 0
    ) {
      alert('debes agregar por lo menos un producto al carrito');
      return;
    }
    this.router.navigate(['pedido']);
  }

  eliminarProductoCarrito(id: number): void {
    console.log('test ', id);
    this.miServicio
      .eliminarProductoCarrito(id)
      .subscribe((res) =>
        res == 'vacio'
          ? (this.zapatillasCarrito = [])
          : this.listarZapatillasCarrito()
      );
  }
}
