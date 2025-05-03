<template>
    <div class="container mx-auto mt-5 p-5 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Chi tiết sản phẩm</h1>
        <div class="mb-4">
            <strong>ID:</strong> {{ product.id }}
        </div>
        <div class="mb-4">
            <strong>Tên sản phẩm:</strong> {{ product.name }}
        </div>
        <div class="mb-4">
            <strong>Số lượng:</strong> {{ product.quantity }}
        </div>
        <div class="mb-4">
            <strong>Giá:</strong> {{ product.price }}đ
        </div>
        <button
            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 shadow-md"
            @click="$inertia.visit('/products')">
            Quay lại
        </button>
    </div>
</template>

<script setup>
const props = defineProps({
    product: Object, // Nhận dữ liệu sản phẩm từ server
});
</script>

<style scoped>
</style>