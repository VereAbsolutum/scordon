<section id="hero" class=" bg-primary flex justify-center items-center w-full pt-12 " style="min-height: 70vh">
    <div class=" py-4 flex  align-center w-full" >
        <x-tw.layouts.container>
            <x-tw.layouts.flex>
                <div class="lg:w-2/3 flex  justify-center items-end py-12">
                    <div class="w-full h-fit">
                        <div class="text-center lg:text-left leading-none ">
                            <h1 class="font-bold lg:text-display text-display-sm font-display">
                                Nós criamos um sistema de gestão de sucesso <br>
                                <span class="mt-8 text-secondary text-heading1 font-bold ">e ajudamos pessoas com seu negócio.</span>
                            </h1>
                            <div class="py-6">
                                <p class="text-paragraph1 text-primary-700 font-medium  border-t border-primary-500 border-t-2 py-4 inline-block">
                                    CdAdm, Gestão e Controle, num só lugar.
                                </p>
                            </div>
                            <x-organisms.form-cta-name class="w-2/3">
                                <x-molecules.input-field type="text" placeholder="Diga seu nome e fale com a gente!" />
                            </x-organisms.form-cta-name>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/3 w-full flex justify-center">
                    <img
                        src="{{ asset('Snapshot_4.PNG') }}"
                        class="w-full max-w-md rounded-lg shadow-2xl"
                        alt="Hero Image"
                    />
                </div>
            </x-tw.layouts.flex>
        </x-tw.layouts.container>
    </div>
</section>