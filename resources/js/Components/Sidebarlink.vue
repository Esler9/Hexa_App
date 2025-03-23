<template>
    <NavLink :href="href" :active="active" :class="['sidebar-link', { 'collapsed': collapsed }]">
        <FontAwesomeIcon :icon="icon" class="h-4 w-4" />
        <span v-if="!collapsed" class="ml-2"><slot /></span>
    </NavLink>
</template>

<script setup>
import { defineProps } from 'vue';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import NavLink from '@/Components/NavLink.vue';

const props = defineProps({
    href: String,
    active: Boolean,
    icon: Object,
    collapsed: Boolean
});
</script>

<style scoped>
/* Estilos específicos para los enlaces del sidebar */
.sidebar-link {
    display: flex;
    align-items: center;
    width: 100%;
    color: white;
    text-decoration: none;
    padding: 0.5rem;
    transition: background-color 0.3s ease, justify-content 0.3s ease;
}

.sidebar-link:hover {
    background-color: #4a5568; /* Color de fondo al pasar el cursor */
}

.sidebar-link.active {
    background-color: #2d3748; /* Color de fondo cuando está activo */
}

.sidebar-link.collapsed {
    justify-content: center;
}
</style>