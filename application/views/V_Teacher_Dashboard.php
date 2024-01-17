<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?= base_url(); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- -----------------------------------------------------------------------------NAVIGATION BAR SECTION-------------------------------------------------------------------------------------------------------------------------------- -->
<nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button type="button" onclick="toggleMenuDropdown()" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!--
                Icon when menu is closed.
    
                Menu open: "hidden", Menu closed: "block"
              -->
              <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!--
                Icon when menu is open x.
    
                Menu open: "block", Menu closed: "hidden"
              -->
              <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-0 items-center">
              
            <img src="<?php echo base_url();?>images/icc.png" alt="" style="width: 50px;">
            </div>
            <div class="hidden sm:ml-6 sm:block">
              <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <h1>IMMACULADA CONCEPCION COLLEGE</h1>  
              </div>
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
                  <img src="<?php echo base_url();?>images/profile.png" alt="" style="width: 55px;">
                </button>
              </div>
              <div id="myProfileDropdown" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
               
                <?= $student_info['last_name'] . ', ' . $student_info['first_name'] ?>
                
                <form action="/C_Student_Dashboard/logout" method="post">
            <input type="submit" value="Logout">
        </form>
              
              </div>
            </div>
          
          </div>
        </div>
      </div>
    
      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="hidden sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <h1>IMMACULADA CONCEPCION COLLEGE</h1>  
        </div>
      </div>
    </nav>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


    <span>Welcome, <?= $teacher_info['last_name'] . ', ' . $teacher_info['first_name'] ?></span><br><br>
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">

    <div class="overflow-auto rounded-lg shadow">
    <table class="w-full">
        <thead class="bg-gray-200 border-b-2 border-gray-200 ">
        <tr>
            <th class="w-64 p-3 text-sm font-semibold tracking-wide text-left">Subject</th>

            <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Room</th>

            <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Schedule</th>

            <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Year Level</th>

            <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Semester</th>

            <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Section Name</th>
        </tr>   
        </thead>

        <tbody class="divide-y divide-gray-100">
            <?php foreach ($schedule_list as $row): ?>
            <tr class="bg-gray-300">
                
                <td class="p-3 text-sm whitespace-nowrap class "><?= $row['subject_name'] ?></td>
                <td class="p-3 text-sm whitespace-nowrap class "><?= $row['room_remarks'] ?></td>
                <td class="p-3 text-sm whitespace-nowrap class "><?= $row['schedule_remarks'] ?></td>
                <td class="p-3 text-sm whitespace-nowrap class "><?= $row['year_level'] ?></td>
                <td class="p-3 text-sm whitespace-nowrap class "><?= $row['semester'] ?></td>
                <td class="p-3 text-sm whitespace-nowrap class "><?= $row['section_name'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    </div>    
    </div>
    <td class="">
                    <a href="/C_Teacher_Dashboard/schedule/?schedule_id=<?= $row['schedule_id'] ?>">Edit</a>
                </td>


    <br><br>
    <form action="/C_Teacher_Dashboard/logout" method="post">
        <input type="submit" value="Logout">
    </form>

</body>

</html>