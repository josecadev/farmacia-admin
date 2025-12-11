<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dashboard Sistema Farmacéutico Wireframe</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active .material-symbols-outlined {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#19e65e",
              "background-light": "#f6f8f6",
              "background-dark": "#112116",
            },
            fontFamily: {
              "display": ["Manrope"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
</head>
<body class="bg-white font-display text-gray-800">
<div class="flex min-h-screen w-full">
<!-- SideNavBar -->
<aside class="flex w-64 flex-col border-r border-gray-300 bg-white p-4">
<div class="flex flex-col gap-4">
<div class="flex items-center gap-3">
<div class="aspect-square size-10 rounded-full border-2 border-dashed border-gray-300" data-alt="User avatar placeholder"></div>
<div class="flex flex-col">
<h1 class="text-base font-medium leading-normal text-gray-800">Sistema Farmacéutico</h1>
<p class="text-sm font-normal leading-normal text-gray-500">Admin</p>
</div>
</div>
<nav class="mt-4 flex flex-col gap-2">
<a class="active flex items-center gap-3 rounded border border-gray-800 bg-gray-100 px-3 py-2" href="#">
<span class="material-symbols-outlined text-gray-800">home</span>
<p class="text-sm font-medium leading-normal text-gray-800">Inicio</p>
</a>
<a class="flex items-center gap-3 rounded border border-transparent px-3 py-2 hover:bg-gray-50" href="#">
<span class="material-symbols-outlined text-gray-800">shopping_cart</span>
<p class="text-sm font-medium leading-normal text-gray-800">Ventas</p>
</a>
<a class="flex items-center gap-3 rounded border border-transparent px-3 py-2 hover:bg-gray-50" href="#">
<span class="material-symbols-outlined text-gray-800">inventory_2</span>
<p class="text-sm font-medium leading-normal text-gray-800">Inventario</p>
</a>
<a class="flex items-center gap-3 rounded border border-transparent px-3 py-2 hover:bg-gray-50" href="#">
<span class="material-symbols-outlined text-gray-800">local_shipping</span>
<p class="text-sm font-medium leading-normal text-gray-800">Recepción</p>
</a>
<a class="flex items-center gap-3 rounded border border-transparent px-3 py-2 hover:bg-gray-50" href="#">
<span class="material-symbols-outlined text-gray-800">bar_chart</span>
<p class="text-sm font-medium leading-normal text-gray-800">Reportes</p>
</a>
<a class="flex items-center gap-3 rounded border border-transparent px-3 py-2 hover:bg-gray-50" href="#">
<span class="material-symbols-outlined text-gray-800">settings</span>
<p class="text-sm font-medium leading-normal text-gray-800">Configuración</p>
</a>
</nav>
</div>
</aside>
<!-- Main Content -->
<main class="flex flex-1 flex-col p-8">
<!-- PageHeading -->
<header class="flex flex-wrap items-center justify-between gap-3">
<h1 class="text-4xl font-black leading-tight tracking-[-0.033em] text-gray-800">Dashboard</h1>
</header>
<!-- Stats -->
<section class="mt-8 flex flex-wrap gap-4">
<div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded border border-gray-300 p-6">
<p class="text-base font-medium leading-normal text-gray-800">Ventas del día</p>
<p class="text-2xl font-bold leading-tight tracking-tight text-gray-800">XXX</p>
<p class="text-base font-medium leading-normal text-gray-500">+X.X%</p>
</div>
<div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded border border-gray-300 p-6">
<p class="text-base font-medium leading-normal text-gray-800">Productos por vencer</p>
<p class="text-2xl font-bold leading-tight tracking-tight text-gray-800">XXX</p>
<p class="text-base font-medium leading-normal text-gray-500">-X.X%</p>
</div>
<div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded border border-gray-300 p-6">
<p class="text-base font-medium leading-normal text-gray-800">Stock crítico</p>
<p class="text-2xl font-bold leading-tight tracking-tight text-gray-800">XXX</p>
<p class="text-base font-medium leading-normal text-gray-500">+X.X%</p>
</div>
<div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded border border-gray-300 p-6">
<p class="text-base font-medium leading-normal text-gray-800">Últimas recepciones</p>
<p class="text-2xl font-bold leading-tight tracking-tight text-gray-800">XXX</p>
<p class="text-base font-medium leading-normal text-gray-500">+X.X%</p>
</div>
</section>
<!-- SectionHeader -->
<h2 class="text-[22px] font-bold leading-tight tracking-[-0.015em] text-gray-800 pb-3 pt-8">Actividad Reciente</h2>
<!-- Table -->
<section class="mt-2 @container">
<div class="flex overflow-hidden rounded border border-gray-300 bg-white">
<table class="w-full flex-1">
<thead>
<tr class="bg-white">
<th class="w-2/5 px-4 py-3 text-left text-sm font-medium leading-normal text-gray-800">Producto</th>
<th class="w-1/5 px-4 py-3 text-left text-sm font-medium leading-normal text-gray-800">Cantidad</th>
<th class="w-1/5 px-4 py-3 text-left text-sm font-medium leading-normal text-gray-800">Estado</th>
<th class="w-1/5 px-4 py-3 text-left text-sm font-medium leading-normal text-gray-800">Fecha</th>
</tr>
</thead>
<tbody>
<tr class="border-t border-t-gray-300">
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-800">Nombre del producto</td>
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-600">XXX</td>
<td class="h-[72px] px-4 py-2">
<div class="flex h-8 w-full items-center justify-center rounded border border-gray-300 px-4">
<span class="truncate text-sm font-medium text-gray-800">Estado Placeholder</span>
</div>
</td>
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-600">YYYY-MM-DD HH:MM AM/PM</td>
</tr>
<tr class="border-t border-t-gray-300">
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-800">Nombre del producto</td>
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-600">XXX</td>
<td class="h-[72px] px-4 py-2">
<div class="flex h-8 w-full items-center justify-center rounded border border-gray-300 px-4">
<span class="truncate text-sm font-medium text-gray-800">Estado Placeholder</span>
</div>
</td>
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-600">YYYY-MM-DD HH:MM AM/PM</td>
</tr>
<tr class="border-t border-t-gray-300">
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-800">Nombre del producto</td>
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-600">XXX</td>
<td class="h-[72px] px-4 py-2">
<div class="flex h-8 w-full items-center justify-center rounded border border-gray-300 px-4">
<span class="truncate text-sm font-medium text-gray-800">Estado Placeholder</span>
</div>
</td>
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-600">YYYY-MM-DD HH:MM AM/PM</td>
</tr>
<tr class="border-t border-t-gray-300">
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-800">Nombre del producto</td>
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-600">XXX</td>
<td class="h-[72px] px-4 py-2">
<div class="flex h-8 w-full items-center justify-center rounded border border-gray-300 px-4">
<span class="truncate text-sm font-medium text-gray-800">Estado Placeholder</span>
</div>
</td>
<td class="h-[72px] px-4 py-2 text-sm font-normal leading-normal text-gray-600">YYYY-MM-DD HH:MM AM/PM</td>
</tr>
</tbody>
</table>
</div>
</section>
</main>
</div>
</body></html>