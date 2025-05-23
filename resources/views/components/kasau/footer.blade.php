        <!-- Enhanced Footer -->
        <footer class="bg-black text-white mt-20">
            <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div>
                        <h3 class="font-bold text-xl text-yellow-400 mb-2 ">Kasau Group</h3>
                        <div class="flex space-x-2 text-white text-lg">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-whatsapp"></i>
                            <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-2">Home</h4>
                        <ul class="space-y-3 text-gray-500">
                            <li class="hover:text-white duration-300"><a href="https://backend-kasau.test/kasau-home">Home</a></li>
                            <li class="hover:text-white duration-300"><a href="https://backend-kasau.test/kasau-about">About</a></li>
                            <li class="hover:text-white duration-300"><a href="https://backend-kasau.test/kasau-partner">Partner</a></li>
                            <li class="hover:text-white duration-300"><a href="">All News</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-2">SubCompany</h4>
                        <ul class="space-y-3 text-gray-500">
                            <li class="hover:text-white duration-300"><a href="https://backend-kasau.test/kasau-sinar-multi-jasa">Kasau Sinar Multi Jasa</a></li>
                            <li class="hover:text-white duration-300"><a href="https://backend-kasau.test/kasau-sinar-sejahtera-abadi">Kasau Sinar Sejahtera Abadi</a></li>
                            <li class="hover:text-white duration-300"><a href="https://backend-kasau.test/kasau-sinar-samudera">Kasau Sinar Samudera</a></li>
                        </ul>
                    </div>
                    <div class="bg-black border-2 border-white rounded-xl text-white p-4 text-xs"
                        x-data="{ rating: 0, hover: 0 }">
                        <p class="font-semibold text-center text-sm text-white mb-2">Session Feedback</p>
                        <div class="text-center text-xl mb-2">
                            <div class="flex justify-center space-x-1">
                                @php for ($i = 1; $i <= 5; $i++): @endphp
                                    <button type="button" @click="rating = {{ $i }}"
                                        x-on:mouseenter="hover = {{ $i }}" x-on:mouseleave="hover = rating"
                                        class="focus:outline-none transition-colors duration-200"
                                        :class="{
                                            'text-yellow-400': hover >= {{ $i }} || rating >=
                                                {{ $i }},
                                            'text-gray-300': hover < {{ $i }} && rating <
                                                {{ $i }}
                                        }">
                                        ★
                                    </button>
                                @php endfor; @endphp
                            </div>
                        </div>
                       <form action="{{ route('rating.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="rating" x-model="rating">
                            <textarea name="review" class="w-full bg-black border p-2 rounded mb-2 text-sm" placeholder="Fill Your Feedback For KasauGroup Here!" rows="3" required></textarea>
                            <button type="submit"
                                class="bg-yellow-400 w-full py-2 rounded hover:bg-yellow-500 
                                    transition-colors duration-200 text-sm font-medium">
                                Submit feedback
                            </button>
                        </form>
                        <span class="text-sm text-gray-500 block my-1 text-center">
                            or
                        </span>
                        <div class="flex items-center gap-x-2 mx-auto">
                            <button
                                class="bg-blue-100 w-full py-2 rounded 
                                       transition-colors duration-200 text-sm font-medium text-black">
                                <a href="#">Home</a>
                            </button>
                            <button
                                class="bg-blue-100 w-full py-2 rounded 
                                       transition-colors duration-200 text-sm font-medium text-black">
                                <a href="">Contact</a>
                            </button>
                        </div>
                    </div>
                </div>
                <p class="text-center mt-6 text-xs text-gray-400">&copy; 2025 Kasau Group. All rights reserved.</p>
            </div>
        </footer>
