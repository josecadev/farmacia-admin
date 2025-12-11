<!DOCTYPE html>
<html lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Reportes Sistema Farmacéutico (V3) Wireframe</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<style type="text/tailwindcss">
    body {
        font-family: sans-serif;
    }
    </style>
</head>
<body class="bg-white text-black">
<div class="flex min-h-screen">
<aside class="w-64 flex-shrink-0 bg-white p-4 flex flex-col border-r border-black">
<div class="flex flex-col gap-4">
<div class="p-2 border border-black">
<h1 class="text-xl">PharmaSys</h1>
</div>
<div class="flex flex-col gap-2">
<a class="p-2 border border-black" href="#">Inicio</a>
<a class="p-2 border border-black" href="#">Ventas</a>
<a class="p-2 border border-black" href="#">Inventario</a>
<a class="p-2 border border-black" href="#">Recepción</a>
<a class="p-2 border-2 border-black font-bold" href="#">Reportes</a>
<a class="p-2 border border-black" href="#">Configuración</a>
</div>
</div>
</aside>
<main class="flex-1 p-8">
<div class="max-w-7xl mx-auto">
<div class="mb-6">
<h1 class="text-3xl font-bold">Reportes</h1>
</div>
<div class="p-4 border border-black mb-8">
<div class="flex items-center gap-4">
<div class="p-2 border border-black flex-grow">
<span>Rango de Fechas</span>
</div>
<div class="p-2 border border-black flex-grow">
<span>Tipo de Reporte</span>
</div>
<div class="p-2 border border-black flex-grow">
<span>Sucursal</span>
</div>
<button class="p-2 border border-black">
<span>Generar</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
<div class="flex flex-col gap-3 p-4 border border-black">
<p class="text-base font-bold">Reporte de Ventas</p>
<p class="text-sm">Ventas totales: [Placeholder]</p>
<p class="text-sm">Nº de transacciones: [Placeholder]</p>
<button class="p-2 border border-black mt-auto w-full">Ver Detalle</button>
</div>
<div class="flex flex-col gap-3 p-4 border border-black">
<p class="text-base font-bold">Medicamentos por Vencer</p>
<p class="text-sm">Medicamentos próximos a vencer: [Placeholder]</p>
<p class="text-sm">Valor total: [Placeholder]</p>
<button class="p-2 border border-black mt-auto w-full">Ver Detalle</button>
</div>
<div class="flex flex-col gap-3 p-4 border border-black">
<p class="text-base font-bold">Stock Crítico</p>
<p class="text-sm">Items con stock bajo: [Placeholder]</p>
<p class="text-sm">Sucursales afectadas: [Placeholder]</p>
<button class="p-2 border border-black mt-auto w-full">Ver Detalle</button>
</div>
<div class="flex flex-col gap-3 p-4 border border-black">
<p class="text-base font-bold">Historial de Recepciones</p>
<p class="text-sm">Última recepción: [Placeholder]</p>
<p class="text-sm">Recepciones este mes: [Placeholder]</p>
<button class="p-2 border border-black mt-auto w-full">Ver Detalle</button>
</div>
<div class="flex flex-col gap-3 p-4 border border-black">
<p class="text-base font-bold">Medicamentos más vendidos</p>
<p class="text-sm">Top 1: [Placeholder]</p>
<p class="text-sm">Top 2: [Placeholder]</p>
<button class="p-2 border border-black mt-auto w-full">Ver Detalle</button>
</div>
<div class="flex flex-col gap-3 p-4 border border-black">
<p class="text-base font-bold">Alertas generadas</p>
<p class="text-sm">Alertas críticas: [Placeholder]</p>
<p class="text-sm">Alertas totales: [Placeholder]</p>
<button class="p-2 border border-black mt-auto w-full">Ver Detalle</button>
</div>
</div>
<div class="w-full h-96 border border-black flex items-center justify-center">
<div class="text-center">
<p>Área para Gráficos / Tablas de Reportes</p>
</div>
</div>
</div>
</main>
</div>

</body></html>