<template>
    <div class="flex h-screen">
      <!-- Sidebar -->
      <aside class="w-64 bg-gray-800 text-white flex flex-col">
        <div class="p-4 text-2xl font-bold border-b border-gray-700">Mi Dashboard</div>
        <nav class="flex-1 p-4 space-y-2">
          <a href="#" class="block hover:bg-gray-700 p-2 rounded">Inicio</a>
          <a href="#" class="block hover:bg-gray-700 p-2 rounded">Usuarios</a>
          <a href="#" class="block hover:bg-gray-700 p-2 rounded">Configuración</a>
        </nav>
      </aside>
  
      <!-- Contenido principal -->
      <main class="flex-1 bg-gray-100 p-6 overflow-auto">
        <slot></slot>
      </main>
    </div>
  </template>
  
  <script>
  export default {
    name: "DashboardLayout",
  };
  </script>
  
  <style scoped>
  /* Puedes agregar animaciones, colores personalizados, etc. */
  </style>
  