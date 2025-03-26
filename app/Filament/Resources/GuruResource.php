<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuruResource\Pages;
use App\Models\Guru;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class GuruResource extends Resource
{
    protected static ?string $model = Guru::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Form Tambah Guru')
                    ->schema([
                        TextInput::make('nama')->required(),
                        TextInput::make('alamat')->required(),
                        TextInput::make('pelajaran')->required(),
                        TextInput::make('pendidikan')->required(),
                        FileUpload::make('foto')
                            ->disk('public') // Simpan di storage public
                            ->directory('images/guru') // Simpan dalam storage/app/public/images/guru
                            ->preserveFilenames() // Gunakan nama asli file
                            ->image() // Hanya izinkan file gambar
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama'),
                TextColumn::make('alamat'),
                TextColumn::make('pelajaran'),
                TextColumn::make('pendidikan'),
                ImageColumn::make('foto')
                    ->disk('public') // Ambil dari storage public // Pastikan path benar
                    ->size(100), // Ukuran thumbnail
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGurus::route('/'),
            'create' => Pages\CreateGuru::route('/create'),
            'edit' => Pages\EditGuru::route('/{record}/edit'),
        ];
    }
}
