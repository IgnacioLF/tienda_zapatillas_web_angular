import { test, expect } from '@playwright/test';
import { serverPrefix } from './constants';

test('anadir producto al carriot', async ({ page }) => {
  await page.goto(`${serverPrefix}/listado`);

  // vamos a ver detalles de la primera zapatilla
  const btn_verDetalles = page.getByText('Ver detalles').first();
  btn_verDetalles.click();
  await page.waitForNavigation();

  //anadimos al carrito la primera zaptilla
  const btn_Comprar = page
    .locator('app-zapatilla-detalles')
    .getByRole('button', { name: 'Comprar' });
  btn_Comprar.click();

  await page.waitForTimeout(1000); // espera 1 segundo

  //vamos al carrito
  const btn_carrito = page.locator('#carrito path');
  btn_carrito.click();
  await page.waitForNavigation();

  //espera a que se cargue la tabla antes de comprobar los elementos
  await page.waitForTimeout(1000); // espera 1 segundo
  await page.waitForSelector('table');
  const table = await page.$('table');
  let numRows = 0;
  if (table) {
    numRows = await page.evaluate((table) => table.rows.length, table);
  }
  expect(numRows).toBe(2);
});

test('Comprueba que funciona vaciar carrito', async ({ page }) => {
  await page.goto(`${serverPrefix}/listado`);

  // vamos a ver detalles de la primera zapatilla
  const btn_verDetalles = page.getByText('Ver detalles').first();
  btn_verDetalles.click();
  await page.waitForNavigation();

  //anadimos al carrito la primera zaptilla
  const btn_Comprar = page
    .locator('app-zapatilla-detalles')
    .getByRole('button', { name: 'Comprar' });
  btn_Comprar.click();

  await page.waitForTimeout(1000); // espera 1 segundo

  //vamos al carrito
  const btn_carrito = page.locator('#carrito path');
  btn_carrito.click();
  await page.waitForNavigation();

  //espera a que se cargue la tabla antes de comprobar los elementos
  await page.waitForTimeout(1000); // espera 1 segundo
  await page.waitForSelector('table');
  const table = await page.$('table');
  let numRows = 0;
  if (table) {
    numRows = await page.evaluate((table) => table.rows.length, table);
  }
  expect(numRows).toBe(2);

  const btn_vaciarCarrito = page.getByRole('button', {
    name: 'Vaciar carrito',
  });
  btn_vaciarCarrito.click();
  await page.waitForTimeout(1000);
  if (table) {
    numRows = await page.evaluate((table) => table.rows.length, table);
  }
  expect(numRows).toBe(1);
});

test('realizar un pedido', async ({ page }) => {
  await page.goto(`${serverPrefix}/listado`);

  // vamos a ver detalles de la primera zapatilla
  const btn_verDetalles = page.getByText('Ver detalles').first();
  btn_verDetalles.click();
  await page.waitForNavigation();

  //anadimos al carrito la primera zaptilla
  const btn_Comprar = page
    .locator('app-zapatilla-detalles')
    .getByRole('button', { name: 'Comprar' });
  btn_Comprar.click();

  await page.waitForTimeout(1000); // espera 1 segundo

  //vamos al carrito
  const btn_carrito = page.locator('#carrito path');
  btn_carrito.click();
  await page.waitForNavigation();

  //empezamos el checkout
  await page.waitForTimeout(1000); // espera 1 segundo
  const btn_realziarPedido = page.getByRole('button', {
    name: 'Realizar pedido',
  });
  btn_realziarPedido.click();
  await page.waitForNavigation();

  //rellenar lkos input y hacer el checkout
  await page.fill('#nombre', 'pwtest');
  await page.fill('#apellidos', 'pwtest');
  await page.fill('#direccion', 'pwtest');
  await page.fill('#cp', 'pwtest');
  await page.fill('#provincia', 'pwtest');
  await page.fill('#envio', 'pwtest');
  await page.fill('#tarjeta', 'pwtest');

  const btn_realizarPedido2 = page.getByRole('button', {
    name: 'Realizar pedido',
  });
  btn_realizarPedido2.click();
  await page.waitForNavigation();

  expect(page.url()).toEqual(`${serverPrefix}/listado`);
});
