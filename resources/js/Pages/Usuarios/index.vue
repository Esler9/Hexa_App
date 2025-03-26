<template>
    <div>
      <h1 class="text-2xl font-bold mb-6">Usuarios</h1>
  
      <a href="/usuarios/create" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
        + Crear Usuario
      </a>
  
      <table class="min-w-full bg-white rounded shadow overflow-hidden">
        <thead class="bg-gray-200">
          <tr>
            <th class="text-left px-4 py-2">ID</th>
            <th class="text-left px-4 py-2">Nombre</th>
            <th class="text-left px-4 py-2">Correo</th>
            <th class="text-left px-4 py-2">Fecha</th>
            <th class="text-left px-4 py-2">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="usuario in usuarios" :key="usuario.id" class="border-t hover:bg-gray-50">
            <td class="px-4 py-2">{{ usuario.id }}</td>
            <td class="px-4 py-2">{{ usuario.name }}</td>
            <td class="px-4 py-2">{{ usuario.email }}</td>
            <td class="px-4 py-2">{{ formatDate(usuario.created_at) }}</td>
            <td class="px-4 py-2 space-x-2">
              <a
                :href="`/usuarios/${usuario.id}/edit`"
                class="text-blue-600 hover:underline"
              >
                Editar
              </a>
              <button
                @click="eliminar(usuario.id)"
                class="text-red-600 hover:underline"
              >
                Eliminar
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script setup>
  import { router } from '@inertiajs/vue3'
  
  defineProps({
    usuarios: Array,
  })
  
  function formatDate(date) {
    return new Date(date).toLocaleDateString()
  }
  
  const eliminar = (id) => {
    if (confirm('¿Deseas eliminar este usuario?')) {
      router.delete(`/usuarios/${id}`)
    }
  }
  </script>
  