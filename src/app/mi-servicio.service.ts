import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/internal/Observable';
import type { Zapatilla } from './models/zapatilla';

@Injectable({
  providedIn: 'root'
})
export class MiServicioService {

  ruta_server = "/server/";

  constructor(private http:HttpClient) { }

  obtenerZapatillas():Observable<Zapatilla[]>{
    return this.http.get<Zapatilla[]>(this.ruta_server+"obtenerZapatillas.php");
  }
}
