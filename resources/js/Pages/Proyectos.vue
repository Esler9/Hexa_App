<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>
<template>
    <Head title="Proyectos" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Proyectos
            </h2>
        </template>

        <div>
            <h1>Proyectos</h1>
            <button @click="showCreateModal">Crear Proyecto</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="proyecto in proyectos" :key="proyecto.id">
                        <td>{{ proyecto.id }}</td>
                        <td>{{ proyecto.nombre }}</td>
                        <td>{{ proyecto.descripcion }}</td>
                        <td>
                            <button @click="showEditModal(proyecto)">Editar</button>
                            <button @click="deleteProyecto(proyecto.id)">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div v-if="showModal">
                <div class="modal">
                    <h2>{{ editMode ? 'Editar Proyecto' : 'Crear Proyecto' }}</h2>
                    <form @submit.prevent="editMode ? updateProyecto() : createProyecto()">
                        <div>
                            <label for="nombre">Nombre:</label>
                            <input type="text" v-model="form.nombre" required />
                        </div>
                        <div>
                            <label for="descripcion">Descripción:</label>
                            <input type="text" v-model="form.descripcion" required />
                        </div>
                        <button type="submit">{{ editMode ? 'Actualizar' : 'Crear' }}</button>
                        <button type="button" @click="closeModal">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

export default {
    components: {
        AuthenticatedLayout,
    },
    data() {
        return {
            proyectos: [],
            showModal: false,
            editMode: false,
            form: {
                id: null,
                nombre: '',
                descripcion: ''
            }
        };
    },
    methods: {
        fetchProyectos() {
            // Aquí iría la lógica para obtener los proyectos desde una API
            // Por ejemplo: axios.get('/api/proyectos').then(response => { this.proyectos = response.data; });
        },
        showCreateModal() {
            this.editMode = false;
            this.form = { id: null, nombre: '', descripcion: '' };
            this.showModal = true;
        },
        showEditModal(proyecto) {
            this.editMode = true;
            this.form = { ...proyecto };
            this.showModal = true;
        },
        createProyecto() {
            // Aquí iría la lógica para crear un proyecto
            // Por ejemplo: axios.post('/api/proyectos', this.form).then(() => { this.fetchProyectos(); this.closeModal(); });
        },
        updateProyecto() {
            // Aquí iría la lógica para actualizar un proyecto
            // Por ejemplo: axios.put(`/api/proyectos/${this.form.id}`, this.form).then(() => { this.fetchProyectos(); this.closeModal(); });
        },
        deleteProyecto(id) {
            // Aquí iría la lógica para eliminar un proyecto
            // Por ejemplo: axios.delete(`/api/proyectos/${id}`).then(() => { this.fetchProyectos(); });
        },
        closeModal() {
            this.showModal = false;
        }
    },
    mounted() {
        this.fetchProyectos();
    }
};
</script>

<style>
.modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 20px;
    border: 1px solid #ccc;
}
</style>