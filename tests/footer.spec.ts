import { test, expect } from '@playwright/test';
import { serverPrefix } from './constants';

test('comprobar que el boton de productos redirige a listado', async ({
  page,
}) => {
  await page.goto(`${serverPrefix}/carrito`);
  const boton_productos = page
    .locator('#middle_footer')
    .getByRole('link', { name: 'Productos' });
  boton_productos.click();
  await page.waitForNavigation();
  expect(page.url()).toEqual(`${serverPrefix}/listado`);
});

test('comprobar que el logo redirige a listado', async ({ page }) => {
  await page.goto(`${serverPrefix}/carrito`);
  const logo_Img = page
    .getByRole('heading', { name: 'logo' })
    .getByRole('img', { name: 'logo' });
  logo_Img.click();
  await page.waitForNavigation();
  expect(page.url()).toEqual(`${serverPrefix}/listado`);
});

test('comprobar que el boton de administracion redirige a al pane de administracion', async ({
  page,
}) => {
  await page.goto(`${serverPrefix}/listado`);
  const boton_adm = page.locator('#middle_footer').getByRole('link', {
    name: 'Administracion',
  });
  boton_adm.click();
  await page.waitForNavigation();
  expect(page.url()).toEqual(`http://localhost/10_tienda/admin/`);
});
