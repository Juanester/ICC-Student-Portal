<?php
$imagePath = 'try.webp';
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>
    <head>
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    
    <script src="https://cdn.tailwindcss.com"></script>
    </head>

<body>
<!-- -----------------------------------------------------------------------------NAVIGATION BAR SECTION-------------------------------------------------------------------------------------------------------------------------------- -->
<nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">

          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            
            <div class="flex flex-shrink-0 items-center">
              
            <img src="<?php echo base_url();?>images/iccl.webp" alt="" style="width: 50px;">
            </div>
            <div class="hidden sm:ml-6 sm:block">
              <a class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <h1 class="text-gray-100 mt-5">     IMMACULADA CONCEPCION COLLEGE</h1>  
              
            </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>
    
            <!-- Profile dropdown -->
            
            <div class="relative ml-3">
              <div>
                <button type="button" onclick="toggleProfileDropdown()" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img src="<?php echo base_url();?>images/pp.png" alt="" style="width: 55px;">
                </button>
              </div>
              <div id="myProfileDropdown" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                      <span> <?= $student_info['last_name'] . ', ' . $student_info['first_name'] ?></span>
                    <form action="/C_student_Dashboard/logout" method="post">
                    <input type="submit" value="Logout">
    </form>
</form>
              
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </nav>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
        <div class="overflow-auto rounded-lg shadow mt-40">
        <table class="w-full">
            <thead class="bg-gray-200 border-b-2 border-gray-200 ">
                <tr>
                <th class="w-64 p-3 text-sm font-semibold tracking-wide text-left">Subjects</th>

                <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Teacher</th>

                <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Year Level</th>

                <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Semester</th>

                <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Preliminary Grade</th>

                <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Midterm Grade</th>

                <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Finals Grade</th>
                
                <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Grade</th>

                <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Remarks</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                <?php foreach ($student_grade_list as $row): ?>

                  <tr class="bg-gray-300">
                    <td class="p-3 text-sm whitespace-nowrap class "><?= $row['subject_name'] ?></td>
                    <td class="p-3 text-sm whitespace-nowrap class "><?= $row['employee_name'] ?></td>
                    <td class="p-3 text-sm whitespace-nowrap class "><?= $row['year_level'] == 1 ? '1st Year' : ($row['year_level'] == 2 ? '2nd Year' : ($row['year_level'] == 3 ? '3rd Year' : '4th Year')) ?></td>
                    <td class="p-3 text-sm whitespace-nowrap class "><?= $row['semester'] == 1 ? '1st Semester' : ($row['semester'] == 2 ? '2nd Semester' : ($row['semester'] == 3 ? '3rd Semester' : '4th Semester')) ?></td>
                    <td class="p-3 text-sm whitespace-nowrap class "><?= $row['prelim_grade'] ?></td>
                    <td class="p-3 text-sm whitespace-nowrap class "><?= $row['midterm_grade'] ?></td>
                    <td class="p-3 text-sm whitespace-nowrap class "><?= $row['final_grade'] ?></td>
                    <td class="p-3 text-sm whitespace-nowrap class "><?= $row['grade'] ?></td>
                    <td class="p-3 text-sm whitespace-nowrap class "><?= $row['grade_remarks_name'] ?></td>
                  </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        </div>
        </div>

        


<!-- -------------------------------------------------------------------------------------JS FOR NAV BAR------------------------------------------------------------------------------------------------------------------------ -->
        <script>
      function toggleProfileDropdown() {
          var dropdown = document.getElementById("myProfileDropdown");
          dropdown.classList.toggle("hidden");
      }
      function toggleMenuDropdown() {
          var dropdown = document.getElementById("mobile-menu");
          dropdown.classList.toggle("hidden");
      }
  </script>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>

</html>