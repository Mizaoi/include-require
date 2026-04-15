<div class="col-md-3 col-lg-2 bg-white border-r min-h-screen p-4 shadow-sm">
    <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Main Menu</span>
    <ul class="nav flex-column mt-3 gap-2">
        <li class="nav-item">
            <a href="index.php?page=home" 
               class="flex items-center p-2 rounded-lg no-underline transition-all duration-300
               <?php echo (!isset($_GET['page']) || $_GET['page'] == 'home') ? 'bg-green-600 text-white shadow-md' : 'text-gray-600 hover:bg-green-50 hover:text-green-700'; ?>">
                <span class="mr-2">🏠</span> Beranda
            </a>
        </li>
        <li class="nav-item">
            <a href="index.php?page=wisatawan" 
               class="flex items-center p-2 rounded-lg no-underline transition-all duration-300
               <?php echo (isset($_GET['page']) && $_GET['page'] == 'wisatawan') ? 'bg-green-600 text-white shadow-md' : 'text-gray-600 hover:bg-green-50 hover:text-green-700'; ?>">
                <span class="mr-2">📊</span> Wisatawan
            </a>
        </li>
    </ul>
</div>