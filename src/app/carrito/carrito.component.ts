import { Component } from '@angular/core';
import { MiServicioService } from '../mi-servicio.service';
import { ZapatillaCarrito } from '../models/zapatillaCarrtio';

@Component({
  selector: 'app-carrito',
  templateUrl: './carrito.component.html',
  styleUrls: ['./carrito.component.css'],
})
export class CarritoComponent {
  zapatillasCarrito: ZapatillaCarrito[] = {} as ZapatillaCarrito[];

  constructor(private miServicio: MiServicioService) {}

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
}
