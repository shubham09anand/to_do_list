<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="../script/components.js"></script>
     <script src="https://cdn.tailwindcss.com"></script>
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
     <title>Document</title>
</head>

<body class="overflow--hidden">

     <!-- navbar starts -->
     <script>
          header()
     </script>
     <!-- navbar ends -->

     <div class="scale-[95%]">
          <div class="flex space-x-2">

               <!-- dashboard starts -->
               <script>
                    dashboard()
               </script>
               <!-- dashboard ends -->

               <div class="w-full bg-white h-screen rounded-xl">
                    <div class="w-5/4 bg-gray-100 space-y-2 sm:space-y-0 sm:flex justify-between px-10 py-2 rounded-lg">
                         <div id="showProfile" class="mx-auto px-5 lg:px-14 py-2 rounded-lg bg-white text-center w-full sm:w-fit h-fit cursor-pointer">Profile</div>
                         <div id="updateProfile" class="mx-auto px-5 lg:px-14 py-2 rounded-lg bg-white text-center w-full sm:w-fit h-fit cursor-pointer"> Update Profile</div>
                         <div id="updatePasswordbutton" class="mx-auto px-5 lg:px-14 py-2 rounded-lg bg-white text-center w-full sm:w-fit h-fit cursor-pointer">Password</div>
                         <div id="deleteAccount" class="mx-auto px-5 lg:px-14 py-2 rounded-lg bg-white text-center w-full sm:w-fit h-fit cursor-pointer">Delete Account</div>
                    </div>

                    <!-- Profile starts -->
                    <div id="userprofile" class="hidden w-full overflow-hidden h-fit" id="profile">
                         <div class="flex flex-wrap w-full h-full">
                              <div class="bg-white md:mx-auto rounded shadow-xl w-[1100px] mx-auto overflow-hidden mt-3 pb-16">
                                   <div class="h-[200px] bg-contain"><img draggable="false" src="https://cdn.pixabay.com/photo/2014/10/07/13/48/mountain-477832_1280.jpg" class="h-[150px] sm:h-[210px] w-full overflow-hidden" alt=""></div>
                                   <div class="py-2 flex flex-col gap-3 px-4">
                                        <div class='h-[100px] shadow-md w-[100px] rounded-full border-4 overflow-hidden -mt-16 ml-2 border-white'>
                                             <img draggable="false" src='https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cmFuZG9tJTIwcGVyc29ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60' class='w-full h-full rounded-full object-center object-cover' alt="">
                                        </div>
                                        <div class="mt-2">
                                             <h3 class="text-xl text-slate-900 relative font-bold leading-6">$user_data['user_name'] </h3>
                                             <p class="text-sm text-gray-600"> $user_data['user_email'] </p>
                                        </div>
                                        <h4 class="text-md font-medium leading-3 mt-4">About</h4>
                                        <p class="text-sm text-stone-500 text-justify"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda est vel quis voluptatum dolores natus? Officiis provident veniam sed nulla nesciunt, incidunt enim? </p>
                                        <div class="text-gray-700 -ml-5 sm:-ml-0">
                                             <div class="grid md:grid-cols-2 text-sm gap-3">
                                                  <div class="grid grid-cols-1">
                                                       <div class="px-4 py-2 font-semibold">First Name</div>
                                                       <div id="" class=" px-4 py-2"> $user_data['first_name'] </div>
                                                  </div>
                                                  <div class="grid grid-cols-2">
                                                       <div class="px-4 py-2 font-semibold">Last Name</div>
                                                       <div class=" px-4 py-2"> $user_data['last_name'] </div>
                                                  </div>
                                                  <div class="grid grid-cols-2">
                                                       <div class="px-4 py-2 font-semibold">Birthday</div>
                                                       <div class=" px-4 py-2"> $user_data['DOB'] </div>
                                                  </div>
                                                  <div class="grid grid-cols-2">
                                                       <div class="px-4 py-2 font-semibold">Age</div>
                                                       <div class=" px-4 py-2"> $user_data['age'] </div>
                                                  </div>
                                                  <div class="grid grid-cols-2">
                                                       <div class="px-4 py-2 font-semibold">Gender</div>
                                                       <div class=" px-4 py-2"> $user_data['user_email'] </div>
                                                  </div>
                                                  <div class="grid grid-cols-2">
                                                       <div class="px-4 py-2 font-semibold">Contact No.</div>
                                                       <div class=" px-4 py-2"> $user_data['phone'] </div>
                                                  </div>
                                                  <div class="grid grid-cols-2">
                                                       <div class="px-4 py-2 font-semibold">Permanant Address</div>
                                                       <div class=" px-4 py-2"> $user_data['address'] </div>
                                                  </div>
                                                  <div class="grid grid-cols-2">
                                                       <div class="px-4 py-2 font-semibold">Email</div>
                                                       <div class="px-4 py-2">
                                                            <a class=" text-blue-800"> $user_data['user_email']</a>
                                                       </div>
                                                  </div>

                                                  <div id="save" class="hidden px-3 py-1 rounded-lg bg-blue-500 text-black text-lg font-medium w-fit ml-3">Save</div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!-- Profile ends -->

                    <!-- Update Profile starts -->
                    <div class="min-h-screen" id="updateProfileForm">
                         <div class="flex w-full overflow-hidden flex-wrap h-fit pb-10">
                              <div class="flex flex-wrap w-full h-full">
                                   <div class="bg-white md:mx-auto rounded shadow-xl w-[1100px] mx-auto overflow-hidden mt-2">
                                        <div class="h-[150px] bg-cover"><img id="backgroundImage" draggable="false" src="https://cdn.pixabay.com/photo/2014/10/07/13/48/mountain-477832_1280.jpg" class="h-[180px] sm:h-[220px] w-full overflow-hidden" alt=""></div>
                                        <div class="px-5 py-2 flex flex-col gap-3 pb-6 relative">
                                             <div class="flex justify-between">
                                                  <div class="flex">
                                                       <div class='h-[80px] w-[80px] sm:h-[100px]sm:w-[100px] shadow-md rounded-full border-4 overflow-hidden border-white flex -mt-5 sm:-mt-0'>
                                                            <div>
                                                                 <img id="profileImage" draggable="false" src='https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cmFuZG9tJTIwcGVyc29ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60' class='w-full h-full rounded-full object-center object-cover' alt="">
                                                            </div>
                                                       </div>
                                                       <div class="w-11 h-11 scale-75 sm:scale-90 lg:scale-100 hover:bg-gray-800 rounded-full bg-black absolute mt-5 sm:mt-10">
                                                            <div class="relative w-11 overflow-hidden h-11 rounded-3xl cursor-pointer">
                                                                 <input id="uploadprofilephotobutton" type="file" class="bg-transparent border-0 opacity-0 scale-y-150 cursor-pointer top-3 absolute">
                                                                 <svg id="profileSvg" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mt-1.5 ml-1.5 mx-auto" fill="white" class="bi bi-camera" viewBox="0 0 16 16">
                                                                      <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                                                                      <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                                                 </svg>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="w-16 h-16 cursor-pointer hover:bg-gray-800 rounded-full p-3 bg-black -mt-3 sm:mt-5 relative scale-75 sm:scale-[85%]">
                                                       <input id="uploadnewbackgroundPhotoButton" type="file" class="bg-transparent border-0 opacity-0 scale-y-[250%] cursor-pointer top-5 left-1 absolute">
                                                       <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="white" class="bi bi-camera" viewBox="0 0 16 16">
                                                            <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                                                            <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                                       </svg>
                                                  </div>
                                             </div>
                                             <div>
                                                  <h3 class="text-xl text-slate-900 relative font-bold leading-6">
                                                       $user_data['user_name'] </h3>
                                                  <p class="text-sm text-gray-600"> $user_data['user_email'] </p>
                                             </div>
                                             <div class="relative">
                                                  <label for="userDescription" class="font-semibold">About</label>
                                                  <textarea name="userDescription" id="userDescription" value="dewdew" class="border-b w-full h-10 text-base p-3 border-gray-300 focus:outline-none shadow-sm focus:shadow-lg resize-none" id="userDescription"></textarea>
                                                  <div id="descriptionWarning" class="opacity-0 absolute text-red-400 text-[10px]">Fill this area</div>
                                             </div>
                                             <div class="text-gray-700 -ml-5 sm:-ml-0 mt-2 space-y-3">
                                                  <div class="grid md:grid-cols-2 md:gap-6">
                                                       <div class="relative z-0 w-full mb-6 group">
                                                            <input type="email" name="userFirstName" id="userFirstName" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" />
                                                            <label for="userFirstName" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First Name</label>
                                                            <div id="firstnameWarning" class="opacity-0 absolute text-red-400 text-[10px]">Fill this area</div>
                                                       </div>
                                                       <div class="relative z-0 w-full mb-6 group">
                                                            <input type="text" name="userLastName" id="userLastName" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                            <label for="userLastName" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Second Name</label>
                                                            <div id="lastnameWarning" class="opacity-0 absolute text-red-400 text-[10px]">Fill this area</div>
                                                       </div>
                                                  </div>
                                                  <div class="grid md:grid-cols-4 md:gap-6">
                                                       <div class="relative z-0 w-full mb-6 group">
                                                            <input type="date" name="userDOB" id="userDOB" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                            <label for="userDOB" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date Of Birth</label>
                                                            <div id="DOBWarning" class="opacity-0 absolute text-red-400 text-[10px]">Fill this area</div>
                                                       </div>
                                                       <div class="relative z-0 w-full mb-6 group">
                                                            <input type="text" name="userAge" id="userAge" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                            <label for="userAge" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Age</label>
                                                            <div id="ageWarning" class="opacity-0 absolute text-red-400 text-[10px]">Fill this area</div>
                                                       </div>
                                                       <div class="relative z-0 w-48 mb-6 group pr-5">
                                                            <div class="relative flex bg-white">
                                                                 <select class="border-b-2 border-x-0 border-t-0 bg-white block appearance-none w-fit border border-grey-lighter text-grey-darker py-2 px-4 pr-20" id="userGender" name="userGender">
                                                                      <option value="" disabled selected hidden>Choose a Gender</option>
                                                                      <option value="Male">Male</option>
                                                                      <option value="Female">Female</option>
                                                                 </select>
                                                                 <div class="pr-5 pointer-events-none flex items-center px-2 text-grey-darker -translate-x-6">
                                                                      <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                           <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                                      </svg>
                                                                 </div>
                                                            </div>
                                                            <div id="genderWarning" class="opacity-0 absolute text-red-400 text-[10px]">Fill this area</div>
                                                       </div>
                                                       <div class="relative z-0 w-full mb-6 group">
                                                            <input type="text" name="userPhoneNumber" id="userPhoneNumber" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                            <label for="userPhoneNumber" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone Number</label>
                                                       </div>
                                                  </div>
                                                  <div class="grid md:grid-cols-3 md:gap-6">
                                                       <div class="relative z-0 w-full mb-6 group">
                                                            <input type="text" name="userCountry" id="userCountry" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                            <label for="userCountry" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Country</label>
                                                            <div id="countryWarning" class="opacity-0 absolute text-red-400 text-[10px]">Fill this area</div>
                                                       </div>
                                                       <div class="relative z-0 w-full mb-6 group">
                                                            <input type="text" name="userState" id="userState" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                            <label for="userState" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">State</label>
                                                            <div id="stateWarning" class="opacity-0 absolute text-red-400 text-[10px]">Fill this area</div>
                                                       </div>
                                                       <div class="relative z-0 w-full mb-6 group">
                                                            <input type="text" name="userCity" id="userCity" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                                            <label for="userCity" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">City</label>
                                                            <div id="cityWarning" class="opacity-0 absolute text-red-400 text-[10px]">Fill this area</div>
                                                       </div>
                                                  </div>
                                                  <button id="updateprofileDetails" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!-- Update Profile ends -->

                    <!-- password reset starts -->
                    <div id="userupdatePassword" class="hidden">
                         <div id="resetPassword" class="max-w-lg mx-auto my-10 sm:my-32 bg-white p-8 rounded-xl shadow-xl shadow-slate-300">
                              <h1 class="text-4xl font-semibold">Reset password</h1>
                              <div>
                                   <div class="flex flex-col space-y-5">
                                        <label for="email">
                                             <p class="font-medium text-slate-700 pb-2">Enter your new Password</p>
                                             <input autocomplete="off" id="newPassword" name="newPassword" type="text" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Password">
                                             <div id="emptyPasswordWarning" class="text-red-400 text-sm opacity-0">Enter your new Passowrd</div>
                                        </label>

                                        <button id="updatePassword" type="button" class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                             </svg>
                                             <span>Reset password</span>
                                        </button>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!-- password reset ends -->

                    <!-- Delete account starts -->
                    <div id="userdeleteAccount" class="hidden">
                         <div class="mt-20 font-sans leading-tight min-h-screen">
                              <div class="w-11/10 lg:w-1/2 mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
                                   <div class="bg-cover h-40" style="background-image: url('https://images.unsplash.com/photo-1522093537031-3ee69e6b1746?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a634781c01d2dd529412c2d1e2224ec0&auto=format&fit=crop&w=2098&q=80');">
                                   </div>
                                   <div class="border-b px-4 pb-6">
                                        <div class="text-center sm:text-left sm:flex mb-4">
                                             <img class="h-32 w-32 rounded-full border-4 border-white -mt-16 mr-4" src="https://randomuser.me/api/portraits/women/21.jpg" alt="">
                                             <div class="py-2">
                                                  <h3 class="font-bold text-2xl">Cait Genevieve</h3>
                                                  <h3 class="font-thin text-sm mb-1">@Username</h3>
                                             </div>
                                        </div>
                                        <div class="flex">
                                             <button id="deleteButton" class="flex-1 rounded-full bg-blue-600 hover:bg-blue-700 text-white antialiased font-bold hover:bg-blue-dark px-4 py-2 mr-2">Delete</button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!-- Delete account ends -->
               </div>
          </div>

          <div id="messageBox" class="hidden flex w-screen h-screen place-content-center items-center absolute z-20 top-1 backdrop-blur-sm">
               <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <span id="message" class="font-medium text-2xl ">Your Password Has Been Succesfully Updated <br></span>
                    <div class="text-center hidden" id="feedbackRequest">
                         <div><br> Please drop a feedback for us before u go.....</div>
                         <div class="flex place-content-center items-center w-full space-x-2">
                              <a href="./feedback.html" class="font-semibold text-md tracking-wide text-black text-xl">Feedback</a><br>
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-5 h-5">
                                   <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                              </svg>
                         </div>
                         <div class="underline w-full place-content-center items-center flex pr-5">
                              <a href="../index.html">No thanks</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     </div>

     <!-- logOut starts -->
     <script>
          logOut()
     </script>
     <!-- logOut ends -->

     <!-- footer starts -->
     <script>
          footer()
     </script>
     <!-- footer ends -->

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <script src="..//script///setting.js"></script>


</body>

</html