import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ListadoComponent } from './listado/listado.component';
import { CarritoComponent } from './carrito/carrito.component';
import { ZapatillaDetallesComponent } from './zapatilla-detalles/zapatilla-detalles.component';
import { PedidoComponent } from './pedido/pedido.component';

import { FormsModule } from '@angular/forms';

@NgModule({
  declarations: [
    AppComponent,
    ListadoComponent,
    CarritoComponent,
    ZapatillaDetallesComponent,
    PedidoComponent,
  ],
  imports: [FormsModule, HttpClientModule, BrowserModule, AppRoutingModule],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule {}
