<div class="card">

    <div class="mb-4">
        <x-label class="mb-1">
            Codígo
        </x-label>

        <x-input wire:model="product.sku" class="w-full" placeholder="Ingrese el código del producto"/>
    </div>

    <div class="mb-4">
        <x-label class="mb-1">
            Nombre
        </x-label>

        <x-input wire:model="product.name" class="w-full" placeholder="Ingrese el nombre del producto"/>
    </div>

    <div class="mb-4">
        <x-label class="mb-1">
            Descripción
        </x-label>

        <x-textarea wire:model="product.name" class="w-full" placeholder="Ingrese la descripción del producto"/>
    </div>
    
    

</div>
