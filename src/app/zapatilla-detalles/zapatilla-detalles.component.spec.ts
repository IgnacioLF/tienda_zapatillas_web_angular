import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ZapatillaDetallesComponent } from './zapatilla-detalles.component';

describe('ZapatillaDetallesComponent', () => {
  let component: ZapatillaDetallesComponent;
  let fixture: ComponentFixture<ZapatillaDetallesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ZapatillaDetallesComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ZapatillaDetallesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
