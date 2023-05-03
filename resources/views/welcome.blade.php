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
          <li><a href="/">Home</a></li>
          <li><a href="/#services">Services</a></li>
          <li><a href="/#pricing">Pricing</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="hero">
        <h2>We Fix Computers</h2>
        <p>Fast and affordable computer repair services.</p>
        <a href="/signup" class="cta">Create an Account and order a repair!</a>
        <form action="/api/makeadmin" method="POST">
        <button class="cta" onclick = "makeadmin()">Already have an account? Log in here!</button>
        </form>
        <a href="/seereview" class="cta">Check out reviews for our service!</a>
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
              <td>$255+</td>
            </tr>
            <tr>
              <td>Virus Removal</td>
              <td>$100+</td>
            </tr>
            <tr>
              <td>Data Recovery</td>
              <td>$600+</td>
            </tr>
            <tr>
              <td>Computer Tune-Up</td>
              <td>$150+</td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Computer Repair Shop. All rights reserved.</p>
    </footer>
  </body>
</html>
