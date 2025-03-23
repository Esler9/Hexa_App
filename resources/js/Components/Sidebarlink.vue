<template>
    <NavLink :href="href" :active="active" class="block hover:bg-gray-700 p-2 rounded flex items-center">
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