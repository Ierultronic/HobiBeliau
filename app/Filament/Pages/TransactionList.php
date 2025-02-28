<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class TransactionList extends Page
{
    protected static ?string $navigationGroup = 'Transactions'; // ✅ Create a new navigation group
    protected static ?string $navigationLabel = 'Transaction List';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.transaction-list';
}
