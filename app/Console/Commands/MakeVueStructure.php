<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeVueStructure extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:vue-structure';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tạo cấu trúc thư mục Vue.js trong resources/js';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $basePath = resource_path('js');
        $directories = [
            'Pages/Auth',
            'Pages/Products',
            'Pages/Users',
            'Components/UI',
            'Components/Form',
            'Layouts',
            'Composables',
            'Stores',
        ];

        foreach ($directories as $directory) {
            $path = $basePath . '/' . $directory;
            if (!File::exists($path)) {
                File::makeDirectory($path, 0755, true);
                $this->info("Created directory: {$path}");
            } else {
                $this->warn("Directory already exists: {$path}");
            }
        }

        $files = [
            'Pages/Dashboard.vue',
            'Pages/Auth/Login.vue',
            'Pages/Products/Index.vue',
            'Pages/Products/Create.vue',
            'Pages/Products/Edit.vue',
            'Pages/Products/Show.vue',
            'Pages/Users/Index.vue',
            'Components/UI/Modal.vue',
            'Components/UI/Button.vue',
            'Components/UI/Table.vue',
            'Components/UI/Pagination.vue',
            'Components/Form/Input.vue',
            'Components/Form/Select.vue',
            'Components/Form/FileUpload.vue',
            'Layouts/AppLayout.vue',
            'Composables/useFormErrors.js',
            'Composables/useModal.js',
            'Stores/productStore.js',
            'app.js',
            'bootstrap.js',
            'inertia.js',
        ];

        foreach ($files as $file) {
            $filePath = $basePath . '/' . $file;
            if (!File::exists($filePath)) {
                File::put($filePath, '');
                $this->info("Created file: {$filePath}");
            } else {
                $this->warn("File already exists: {$filePath}");
            }
        }

        $this->info('Vue.js structure created successfully!');
    }
}
