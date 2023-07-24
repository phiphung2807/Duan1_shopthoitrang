<section>
    <?php
    extract($onesp);
    ?>
    <div class="relative mx-auto max-w-screen-xl px-4 py-8">
        <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-1">

                <?php
                $img = $img_path . $img;
                echo '<img class="w-full" src="' . $img . '" >' ?>

            </div>

            <div class="top-0">

                <div class="mt-8 flex justify-between">
                    <div class="max-w-[35ch] space-y-2">
                        <h1 class="text-xl font-bold sm:text-2xl">
                            <?php echo $name; ?>
                        </h1>

                        <div class="-ms-0.5 flex">
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <svg class="h-5 w-5 text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>

                    <p class="text-lg font-bold">$<?php echo $price; ?></p>
                </div>
                <div class="mt-4">
                    <div class="prose max-w-none">
                        <p>
                            <?php echo $description; ?>
                        </p>
                    </div>

                </div>

                <form class="mt-8">
                    <!-- <fieldset>
                        <legend class="mb-1 text-sm font-medium">Color</legend>

                        <div class="flex flex-wrap gap-1">
                            <label for="color_tt" class="cursor-pointer">
                                <input type="radio" name="color" id="color_tt" class="peer sr-only" />

                                <span class="group inline-block rounded-full border px-3 py-1 text-xs font-medium peer-checked:bg-black peer-checked:text-white">
                                    Texas Tea
                                </span>
                            </label>

                            <label for="color_fr" class="cursor-pointer">
                                <input type="radio" name="color" id="color_fr" class="peer sr-only" />

                                <span class="group inline-block rounded-full border px-3 py-1 text-xs font-medium peer-checked:bg-black peer-checked:text-white">
                                    Fiesta Red
                                </span>
                            </label>

                            <label for="color_cb" class="cursor-pointer">
                                <input type="radio" name="color" id="color_cb" class="peer sr-only" />

                                <span class="group inline-block rounded-full border px-3 py-1 text-xs font-medium peer-checked:bg-black peer-checked:text-white">
                                    Cobalt Blue
                                </span>
                            </label>
                        </div>
                    </fieldset> -->

                    <!-- <fieldset class="mt-4">
                        <legend class="mb-1 text-sm font-medium">Size</legend>

                        <div class="flex flex-wrap gap-1">
                            <label for="size_xs" class="cursor-pointer">
                                <input type="radio" name="size" id="size_xs" class="peer sr-only" />

                                <span class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white">
                                    XS
                                </span>
                            </label>

                            <label for="size_s" class="cursor-pointer">
                                <input type="radio" name="size" id="size_s" class="peer sr-only" />

                                <span class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white">
                                    S
                                </span>
                            </label>

                            <label for="size_m" class="cursor-pointer">
                                <input type="radio" name="size" id="size_m" class="peer sr-only" />

                                <span class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white">
                                    M
                                </span>
                            </label>

                            <label for="size_l" class="cursor-pointer">
                                <input type="radio" name="size" id="size_l" class="peer sr-only" />

                                <span class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white">
                                    L
                                </span>
                            </label>

                            <label for="size_xl" class="cursor-pointer">
                                <input type="radio" name="size" id="size_xl" class="peer sr-only" />

                                <span class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white">
                                    XL
                                </span>
                            </label>
                        </div>
                    </fieldset> -->

                    <div class="mt-8 flex gap-4">
                        <div>
                            <label for="quantity" class="sr-only">Qty</label>

                            <input type="number" id="quantity" min="1" value="1" class="w-12 rounded border-gray-200 py-3 text-center text-xs [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />
                        </div>

                        <button type="submit" class="block rounded bg-green-600 px-5 py-3 text-xs font-medium text-white hover:bg-green-500">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>