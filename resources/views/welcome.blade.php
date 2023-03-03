<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Repair Shop</title>
    <link href="{{ asset('main.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>
    <header>
      <h1>Computer Repair Shop</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="hero">
        <h2>We Fix Computers</h2>
        <p>Fast and affordable computer repair services.</p>
        <a href="#" class="cta">Get a Free Quote</a>
      </section>
      <section id="services">
        <h2>Our Services</h2>
        <ul>
          <li>Hardware Repair</li>
          <li>Virus Removal</li>
          <li>Data Recovery</li>
          <li>Computer Tune-Up</li>
        </ul>
      </section>
      <section id="pricing">
        <h2>Pricing</h2>
        <p>Our pricing is competitive and transparent. No hidden fees.</p>
        <table>
          <thead>
            <tr>
              <th>Service</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Hardware Repair</td>
              <td>$50+</td>
            </tr>
            <tr>
              <td>Virus Removal</td>
              <td>$75+</td>
            </tr>
            <tr>
              <td>Data Recovery</td>
              <td>$100+</td>
            </tr>
            <tr>
              <td>Computer Tune-Up</td>
              <td>$25+</td>
            </tr>
          </tbody>
        </table>
      </section>
      <section id="contact">
        <h2>Contact Us</h2>
        <form>
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
          <label for="message">Message</label>
          <textarea id="message" name="message" required></textarea>
          <button type="submit">Send</button>
        </form>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Computer Repair Shop. All rights reserved.</p>
    </footer>
  </body>
</html>
