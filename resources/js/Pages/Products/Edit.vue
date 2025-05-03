<template>
    <div class="container mx-auto mt-5 p-5 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Chỉnh sửa sản phẩm</h1>
        <form @submit.prevent="submit">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Tên sản phẩm</label>
                <input
                    v-model="form.name"
                    type="text"
                    id="name"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                />
                <div v-if="form.errors.name" class="text-red-500 text-sm">
                    {{ form.errors.name }}
                </div>
            </div>
            <div class="mb-4">
                <label for="quantity" class="block text-sm font-medium text-gray-700">Số lượng</label>
                <input
                    v-model="form.quantity"
                    type="number"
                    id="quantity"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                />
                <div v-if="form.errors.quantity" class="text-red-500 text-sm">
                    {{ form.errors.quantity }}
                </div>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Giá</label>
                <input
                    v-model="form.price"
                    type="number"
                    id="price"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                />
                <div v-if="form.errors.price" class="text-red-500 text-sm">
                    {{ form.errors.price }}
                </div>
            </div>
            <button
                type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 shadow-md">
                Lưu
            </button>
        </form>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    product: Object, // Nhận dữ liệu sản phẩm từ server
});

const form = useForm({
    name: props.product.name,
    quantity: props.product.quantity,
    price: props.product.price,
});

const submit = () => {
    form.put(`/products/${props.product.id}`, {
        onSuccess: () => {
            // Redirect or show success message
        },
        onError: (errors) => {
            // Handle errors
        },
    });
};
</script>

<style scoped>
</style>