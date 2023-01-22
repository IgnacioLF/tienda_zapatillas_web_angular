import { test, expect } from '@playwright/test';

test.beforeEach(async ({ page }) => {
  await page.goto('http://localhost:4200/listado');
});

test('comprobar que se han recibido un listado de zapatillas', async ({
  page,
}) => {
  const listado_zapatillas = page.locator('#listado_zapatillas');
  await expect(listado_zapatillas).not.toBeEmpty();
});
