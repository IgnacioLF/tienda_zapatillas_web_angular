import { Component } from '@angular/core';
import { MiServicioService } from '../mi-servicio.service';
import { Zapatilla } from '../models/zapatilla';

@Component({
  selector: 'app-listado',
  templateUrl: './listado.component.html',
  styleUrls: ['./listado.component.css']
})
export class ListadoComponent {
  zapatillas:Zapatilla[] = {} as Zapatilla[];

  constructor(private miServicio:MiServicioService){
    
  }

  ngOnInit():void{
    this.miServicio.obtenerZapatillas().subscribe(res=> this.zapatillas =res);
  }
}
