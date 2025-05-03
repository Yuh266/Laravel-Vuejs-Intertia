<template>
    <!-- <h1>Hello</h1> -->
    <div class="container mx-auto mt-5 p-5 bg-white shadow-md rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Quản lý sản phẩm</h1>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 shadow-md">
                Thêm sản phẩm
            </button>
        </div>
        <div>
            <table class="min-w-full divide-y divide-gray-200 shadow-lg rounded-lg overflow-hidden">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            STT
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
                    <tr class="hover:bg-gray-100 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            1
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            Áo thể thao nam
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            10
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            300,000đ
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button
                                class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 shadow-md mr-3">
                                Sửa
                            </button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 shadow-md">
                                Xóa
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            2
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            Quần thể thao nam
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            15
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            400,000đ
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button
                                class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 shadow-md mr-3">
                                Sửa
                            </button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 shadow-md">
                                Xóa
                            </button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup></script>

<style lang="scss" scoped></style>