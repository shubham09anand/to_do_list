<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="../script/components.js"></script>
     <script src="../Assets/jquery-3.7.0.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.6/platform.min.js" integrity="sha512-eYPrm8TgYWg3aa6tvSRZjN4v0Z9Qx69q3RhfSj+Mf89QqwOMqmwSlsVqfp4N8NVAcZe/YeUhh9x/nM2CAOp6cA==" crossorigin="anonymous"></script>
     <title>Document</title>
</head>

<body>
     <!-- component -->
     <section>
          <div class="bg-black text-white py-5">
               <div class="container mx-auto flex flex-col md:flex-row my-6">
                    <div class="flex flex-col w-full lg:w-1/3 p-8">
                         <p class="text-yellow-300 text-lg uppercase tracking-loose">REVIEW</p>
                         <p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug">Leave us a feedback!</p>
                         <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-00"> Please provide your
                              valuable feedback.</p>
                    </div>
                    <div class="flex flex-col w-full lg:w-2/3 justify-center">
                         <div class="container w-full px-4">
                              <div class="flex flex-wrap justify-center">
                                   <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                                             <div class="flex-auto p-5 lg:p-10">
                                                  <h4 class="text-2xl mb-4 text-black font-semibold">Have a suggestion?
                                                  </h4>
                                                  <form id="feedbackForm" action="" method="">
                                                       <div class="relative w-full mb-3">
                                                            <label form="email" class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label>
                                                            <input type="email" name="email" id="email" class="border-0 px-3 py-3 rounded text-sm shadow w-full bg-gray-200 placeholder-black outline-none text-gray-900 placeholder:text-gray-400" autocomplete="off" placeholder="Email" style="transition: all 0.15s ease 0s;" required />
                                                            <div id="mailWarning" class="text-red-700 text-xs tracking-wide pl-0.5 absloute opacity-0">Enter your Mail</div>
                                                       </div>
                                                       <div class="relative w-full mb-3">
                                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="message">Feedback</label>
                                                            <textarea maxlength="300" name="feedback" id="feedback" rows="4" cols="80" autocomplete="off" class="placeholder:text-gray-400 resize-none border-0 px-3 py-3 bg-gray-200 placeholder-black text-gray-800 rounded text-sm shadow focus:outline-none w-full" placeholder="Enter your feedback (you can write any feature which you like to see)" required></textarea>
                                                            <div id="feedbackWarning" class="text-red-700 text-xs tracking-wide pl-0.5 absloute opacity-0">Enter your Feedback</div>
                                                       </div>
                                                       <div class="relative">
                                                            <label for="navigate" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white uppercase">How
                                                                 Easy Was To Navigate through interface</label>
                                                            <select autocomplete="off" id="navigate" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                 <option disabled selected>Choose a Option</option>
                                                                 <option value="Very Easy">Very Easy</option>
                                                                 <option value="Easy">Easy</option>
                                                                 <option value="Somewhat Difficult">Somewhat Difficult</option>
                                                                 <option value="Difficult">Difficult</option>
                                                                 <option value="Very Difficult">Very Difficult</option>
                                                            </select>
                                                            <div id="navigateWarning" class="text-red-700 text-xs tracking-wide pl-0.5 absloute opacity-0">Choose an Option</div>
                                                       </div>
                                                       <div class="relative">
                                                            <label for="ui" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white uppercase mt-2">How
                                                                 was the user interface</label>
                                                            <select autocomplete="off" id="ui" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                 <option disabled selected>Choose a Option</option>
                                                                 <option value="1 star">1 star</option>
                                                                 <option value="2 star">2 star</option>
                                                                 <option value="3 star">3 star</option>
                                                                 <option value="4 star">4 star</option>
                                                                 <option value="5 star">5 star</option>
                                                            </select>
                                                            <div id="uiWarning" class="text-red-700 text-xs tracking-wide pl-0.5 absloute opacity-0">Choose an Option</div>
                                                       </div>
                                                       <div class="text-center mt-6">
                                                            <button type="button" id="feedbackBtn" class="bg-yellow-300 text-black text-center mx-auto active:bg-yellow-400 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="submit">Submit </button>
                                                            <button type="button" id="nothanksBtn" class="bg-black text-white text-center mx-auto text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="submit">No Thanks </button>
                                                       </div>

                                                  </form>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <div id="feedbackMessage" class="hidden h-screen w-screen backdrop-blur-2xl absolute top-0">
          <div class="uppercase text-5xl font-semibold text-gray-500 text-center pt-40">Thank You For Your Valuable <span class="font-bold text-8xl"><br>Feedback</span>.</div>
     </div>

     <script src="..//script/feedback.js"></script>

</body>

</html>