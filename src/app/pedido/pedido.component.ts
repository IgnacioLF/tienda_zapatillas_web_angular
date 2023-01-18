import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { MiServicioService } from '../mi-servicio.service';
import { Pedido } from '../models/pedido';

@Component({
  selector: 'app-pedido',
  templateUrl: './pedido.component.html',
  styleUrls: ['./pedido.component.css'],
})
export class PedidoComponent {
  pedido: Pedido = {} as Pedido;

  constructor(private servicio: MiServicioService, private router: Router) {}

  finalizarPedido(): void {
    //TODO validaciones
    this.servicio
      .registrarPedido(this.pedido)
      .subscribe((res) =>
        res == 'ok' ? this.pedidoOk() : alert('no se puedo registrar tu pedido')
      );
  }

  pedidoOk(): void {
    alert('pedido realizado correctamente');
    this.router.navigate(['listado']);
  }
}
