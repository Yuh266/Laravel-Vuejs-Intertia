<template>
    <div class="container mx-auto mt-5 p-5 bg-white shadow-md rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Quản lý sản phẩm</h1>
            <button
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 shadow-md"
                @click="$inertia.visit('/products/create')">
                Thêm sản phẩm
            </button>
        </div>
        <div>
            <table class="min-w-full divide-y divide-gray-200 shadow-lg rounded-lg overflow-hidden">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Tên sản phẩm
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Số lượng
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Giá
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                            Hành động
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr v-for="(product, index) in products" :key="product.id" class="hover:bg-gray-100 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ product.id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ product.name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ product.quantity }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ product.price }}đ
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button
                                class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 shadow-md mr-3"
                                @click="$inertia.visit(`/products/${product.id}/edit`)">
                                Sửa
                            </button>
                            <button
                                class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 shadow-md mr-3"
                                @click="$inertia.visit(`/products/${product.id}`)">
                                Xem
                            </button>
                            <button
                                class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 shadow-md"
                                @click="deleteProduct(product.id)">
                                Xóa
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';
import { usePage } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3'

// Nhận props từ server
defineProps({
    products: Array, // Định nghĩa kiểu dữ liệu là mảng
});

const deleteProduct = (id) => {
    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')) {
        router.delete(`/products/${id}`, {
            onSuccess: () => {
                // alert('Sản phẩm đã được xóa thành công!');
            },
            onError: (errors) => {
                console.error(errors);
            },
        });
    }
};










</script>
<style lang="scss" scoped>
</style>
