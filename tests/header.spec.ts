import { test, expect } from '@playwright/test';
import { serverPrefix } from './constants';

test('comprobar que el boton de productos te redirige a listado', async ({
  page,
}) => {
  await page.goto(`${serverPrefix}/carrito`);
  const boton_productos = page
    .getByRole('navigation')
    .getByRole('link', { name: 'Productos' });
  boton_productos.click();
  await page.waitForNavigation();
  expect(page.url()).toEqual(`${serverPrefix}/listado`);
});

test('comprobar que el boton de comprar te redirige a listado', async ({
  page,
}) => {
  await page.goto(`${serverPrefix}/carrito`);
  const boton_comprar = page.getByRole('button', { name: 'Comprar' });
  boton_comprar.click();
  await page.waitForNavigation();
  expect(page.url()).toEqual(`${serverPrefix}/listado`);
});

test('comprobar que el logo de comprar te redirige a listado', async ({
  page,
}) => {
  await page.goto(`${serverPrefix}/carrito`);
  const logo_Img = page.getByRole('navigation').getByRole('img', {
    name: 'logo',
  });
  logo_Img.click();
  await page.waitForNavigation();
  expect(page.url()).toEqual(`${serverPrefix}/listado`);
});

test('comprobar que el boton de administracion redirige a al pane de administracion', async ({
  page,
}) => {
  await page.goto(`${serverPrefix}/listado`);
  const boton_adm = page.getByRole('navigation').getByRole('link', {
    name: 'Administracion',
  });
  boton_adm.click();
  await page.waitForNavigation();
  expect(page.url()).toEqual(`http://localhost/10_tienda/admin/`);
});

test('comprobar que el boton de carrito te redirige a carrito', async ({
  page,
}) => {
  await page.goto(`${serverPrefix}/listado`);
  const boton_carrito = page.locator('#carrito');
  boton_carrito.click();
  await page.waitForNavigation();
  expect(page.url()).toEqual(`${serverPrefix}/carrito`);
});
