<?php

namespace Database\Seeders;

// database/seeders/EstadosProyectoSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosProyectoSeeder extends Seeder
{
    public function run(): void
    {
        $estados = [
            'Cotización',
            'Aprobado',
            'Construcción',
            'Producción',
            'Finalizado',
            'Cancelado',
            'Suspendido por falta de pago',
            'Cliente no desea continuar',
        ];

        foreach ($estados as $estado) {
            DB::table('estados_proyecto')->insert([
                'nombre' => $estado,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
