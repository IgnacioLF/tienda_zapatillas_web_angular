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

  nombreOk = true;
  apellidosOk = true;
  direccionOk = true;
  cpOk = true;
  provinciaOk = true;
  envioOk = true;
  tarjetaOk = true;

  constructor(private servicio: MiServicioService, private router: Router) {}

  finalizarPedido(): void {
    if (this.validarForm()) {
      this.servicio
        .registrarPedido(this.pedido)
        .subscribe((res) =>
          res == 'ok'
            ? this.pedidoOk()
            : alert('no se puedo registrar tu pedido')
        );
    }
    console.log(this.nombreOk);
  }

  validarForm() {
    // validacion de undefined
    if (this.pedido.nombre === undefined) {
      this.nombreOk = false;
      return true;
    } else if (this.pedido.apellidos === undefined) {
      this.apellidosOk = false;
      return true;
    } else if (this.pedido.direccion === undefined) {
      this.direccionOk = false;
      return true;
    } else if (this.pedido.cp === undefined) {
      this.cpOk = false;
      return true;
    } else if (this.pedido.provincia === undefined) {
      this.provinciaOk = false;
      return true;
    } else if (this.pedido.envio === undefined) {
      this.envioOk = false;
      return true;
    } else if (this.pedido.tarjeta === undefined) {
      this.tarjetaOk = false;
      return true;
    }

    if (/^[a-zA-Z ]{3,20}$/.test(this.pedido.nombre)) {
      this.nombreOk = true;
    } else {
      this.nombreOk = false;
      return false;
    }

    if (/^[a-zA-Z ]{3,20}$/.test(this.pedido.apellidos)) {
      this.apellidosOk = true;
    } else {
      this.apellidosOk = false;
      return false;
    }

    if (/^[a-zA-Z ]{3,20}$/.test(this.pedido.direccion)) {
      this.direccionOk = true;
    } else {
      this.direccionOk = false;
      return false;
    }

    if (/^[a-zA-Z1-9 ]{3,20}$/.test(this.pedido.cp)) {
      this.cpOk = true;
    } else {
      this.cpOk = false;
      return false;
    }

    if (/^[a-zA-Z ]{3,20}$/.test(this.pedido.provincia)) {
      this.provinciaOk = true;
    } else {
      this.provinciaOk = false;
      return false;
    }

    if (/^[a-zA-Z ]{3,20}$/.test(this.pedido.envio)) {
      this.envioOk = true;
    } else {
      this.envioOk = false;
      return false;
    }

    if (/^[a-zA-Z1-9 ]{3,20}$/.test(this.pedido.tarjeta)) {
      this.tarjetaOk = true;
    } else {
      this.tarjetaOk = false;
      return false;
    }

    return true;
  }

  pedidoOk(): void {
    alert('pedido realizado correctamente');
    this.router.navigate(['listado']);
  }
}
