<section id="hero">
    <div class=" py-4 flex align-center ">
        <x-tw.layouts.container>
            <x-tw.layouts.flex>
                <div class="lg:w-2/3 flex  justify-center items-end py-12">
                    <div class="w-full h-fit">
                        <div class="text-center lg:text-left leading-none">
                            <x-atoms.display variant="2">
                                Nós criamos um sistema de gestão de sucesso <br>
                                <span class="text-secondary font-bold">e ajudamos pessoas com negócio.</span>
                            </x-atoms.display>
                            <div class="py-6">
                                <x-atoms.paragraph1>
                                    CdAdm, Gestão e Controle, num só lugar.
                                </x-atoms.paragraph1>
                            </div>
                            <x-molecules.button variant="secondary">
                                Fale com a gente, agora mesmo!
                            </x-molecules.button>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/3 w-full flex justify-center">
                    <img
                        src="{{ asset('Snapshot_4.PNG') }}"
                        class="w-full max-w-md rounded-lg shadow-2xl"
                        alt="Hero Image" />
                </div>
            </x-tw.layouts.flex>
        </x-tw.layouts.container>
    </div>
</section>