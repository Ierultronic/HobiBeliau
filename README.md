HobiBeliau TCG Shop

📌 Project Overview

HobiBeliau TCG Shop is an online trading card game (TCG) store that allows users to purchase card packs, trade cards, and manage their collections. The system features a gacha-style pack opening system, inventory management, and user-friendly admin controls.

ROADMAP OF THIS PROJECT:

🚀 Features

🛒 User Features

Buy card packs with a gacha-style system.

View and manage owned cards in a personal inventory.

Trade cards with other users.

Wishlist feature for desired cards.

User authentication and account management.

🛠 Admin Features

Manage stock and inventory of available card packs.

Set pricing and availability for different packs.

Handle transactions and order history.

Manage users and their collections.

🏗 Tech Stack

Backend: Laravel (with Livewire for dynamic UI updates)

Frontend: Filament Admin Panel

Database: MySQL

Storage: Laravel Filesystem (Local/Public Storage for images)

PDF Generation: DOMPDF for invoices and receipts

🛠 Installation Guide

📥 Clone the Repository

git clone https://github.com/yourusername/hobibeliau-tcg-shop.git
cd hobibeliau-tcg-shop

🛠 Install Dependencies

composer install
npm install

⚙️ Set Up Environment

cp .env.example .env
php artisan key:generate

Configure .env file with your database, storage, and authentication settings.

📂 Migrate Database

php artisan migrate --seed

🏃‍♂️ Run the Project

php artisan serve
npm run dev

🔥 Usage

Register/Login as a user.

Browse and buy TCG packs.

Open packs and view collected cards.

Manage inventory and trade with others.

Admins can log in to manage stock and orders.

🔧 Troubleshooting

Image Storage Issues

Ensure storage:link is set up correctly:

php artisan storage:link

Verify config/filesystems.php is using public storage.

Gacha System Not Giving Cards Correctly?

Check PackOpeningService.php logic.

Ensure correct rarity drop rates are set in the database.

Updating Stock Gives an Error?

Make sure $this->stock is an Eloquent model before calling update().

Check updateStock() function for correct array-to-model conversion.

📌 Future Improvements

Add a marketplace for users to sell/buy specific cards.

Implement a leaderboard system for top collectors.

Introduce a deck-building feature.

💡 Contributing

Fork the repository.

Create a new branch (feature/your-feature).

Commit changes and push.

Create a Pull Request.

📜 License

This project is open-source and available under the MIT License.

Enjoy collecting! 🎴✨
