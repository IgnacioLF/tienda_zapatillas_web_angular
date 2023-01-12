import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { MiServicioService } from '../mi-servicio.service';
import { Zapatilla } from '../models/zapatilla';

@Component({
  selector: 'app-zapatilla-detalles',
  templateUrl: './zapatilla-detalles.component.html',
  styleUrls: ['./zapatilla-detalles.component.css'],
})
export class ZapatillaDetallesComponent {
  id_zapatilla: number = -1;
  zapatilla: Zapatilla = {} as Zapatilla;
  mensaje: String = '';

  constructor(
    private miServicio: MiServicioService,
    private activatedRoute: ActivatedRoute
  ) {}

  ngOnInit(): void {
    this.id_zapatilla = Number(this.activatedRoute.snapshot.paramMap.get('id'));
    this.mensaje = 'mostrar detalles del registro de id: ' + this.id_zapatilla;
    this.miServicio
      .obtenerZapatillaPorId(this.id_zapatilla)
      .subscribe((res) => (this.zapatilla = res));
  }

  agregar_producto_al_carrito(): void {
    this.miServicio
      .agregarAlCarrito(this.id_zapatilla, 1)
      .subscribe((res) =>
        res == 'ok'
          ? alert('producto agregado al carrito')
          : alert('no s epudo agregar al carrito')
      );
  }
}
