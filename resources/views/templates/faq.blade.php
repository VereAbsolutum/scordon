<section id="faq" class="faq">
    <div class="container mx-auto px-4">
        <x-molecules.section-header
            title="FAQ"
            subtitle="O que mais perguntam."
            subheader="Ainda tem dúvidas? Entre em contato agora mesmo. Ficamos feliz em respondê-lo."
        />
        <x-tw.layouts.container>
            <x-tw.display.accordion :items="$questions" />
        </x-tw.layouts.container>
    </div>
</section>