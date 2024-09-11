<x-layout.app title="Contact">
    <h1>Contact</h1>

        <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op info@smart-solutions.nl. We proberen zo snel mogelijk te reageren!</p>

        <form action="#" method="POST">
            <div>
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="subject">Onderwerp:</label>
                <input type="text" id="subject" name="subject">
            </div>
            <div>
                <label for="message">Bericht:</label>
                <textarea id="message" name="message"></textarea>
            </div>
            <button type="submit" class="btn-primary">Verstuur</button>
        </form>
</x-layout.app>
