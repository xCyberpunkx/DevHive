<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ListingResource\Pages;
use App\Models\Listing;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ListingResource extends Resource
{
    protected static ?string $model = Listing::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->placeholder('Enter title')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('company')
                    ->label('Company')
                    ->placeholder('Enter company name')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('location')
                    ->label('Location')
                    ->placeholder('Enter location')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('website')
                    ->label('Website')
                    ->placeholder('Enter website URL')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->placeholder('Enter email address')
                    ->email()
                    ->required(),
                TextInput::make('tags')
                    ->label('Tags')
                    ->placeholder('Enter tags')
                    ->maxLength(255)
                    ->required(),
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable(),
                TextColumn::make('company')
                    ->label('Company')
                    ->searchable(),
                TextColumn::make('location')
                    ->label('Location')
                    ->searchable(),
                TextColumn::make('website')
                    ->label('Website')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('tags')
                    ->label('Tags')
                    ->searchable(),
            ])
            ->filters([
               
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListListings::route('/'),
            'create' => Pages\CreateListing::route('/create'),
            'edit' => Pages\EditListing::route('/{record}/edit'),
        ];
    }
}
