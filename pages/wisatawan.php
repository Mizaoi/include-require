<?php require 'koneksi.php'; ?>
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-4 border-b border-gray-100 bg-gray-50 flex justify-between items-center">
        <h2 class="text-xl font-bold text-gray-800">Daftar Pengunjung</h2>
        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Live Data</span>
    </div>
    <div class="p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="bg-gray-50 text-gray-500 text-xs uppercase">
                    <tr>
                        <th class="px-6 py-3 border-0">ID</th>
                        <th class="px-6 py-3 border-0">Nama Lengkap</th>
                        <th class="px-6 py-3 border-0">Asal Kota</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM wisatawan");
                    while ($data = mysqli_fetch_assoc($query)) {
                        echo "<tr>
                                <td class='px-6 py-2'><span class='text-gray-400 font-mono'>#{$data['id']}</span></td>
                                <td class='px-6 py-2 font-medium text-gray-900'>{$data['nama']}</td>
                                <td class='px-6 py-2 text-gray-600 font-light'>{$data['asal']}</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>