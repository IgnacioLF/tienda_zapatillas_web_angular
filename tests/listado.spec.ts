import { test, expect } from '@playwright/test';
import { serverPrefix } from './constants';

test.beforeEach(async ({ page }) => {
  await page.goto(`${serverPrefix}/listado`);
});

test('comprobar que se han recibido un listado de zapatillas', async ({
  page,
}) => {
  const listado_zapatillas = page.locator('#listado_zapatillas');
  await expect(listado_zapatillas).not.toBeEmpty();
});
