TABLICE INDEKSOWANE NUMERYCZNIE

1. Napisz skrypt, który wypisze elementy tablicy, których wartoœæ mieœci siê w przedziale (5, 16].

2. Napisz skrypt, który zwiêkszy ka¿dy element tablicy o wartoœæ elementu poprzedniego. Pierwszy element tablicy nale¿y pozostawiæ bez zmian. Nastêpnie wypisz elementy tablicy zaczynaj¹c od koñca.

3. Napisz skrypt przetwarzaj¹cy tablicê (indeksowan¹) zawieraj¹c¹ liczby ca³kowite. Skrypt powinien zamieniæ ka¿d¹ nieparzyst¹ wartoœæ w tablicy na jej kwadrat. Liczby ujemne nale¿y zast¹piæ zerami, w oddzielnej tablicy przechowaæ numery indeksów takich elementów i na koniec wypisaæ. 

4. Napisz skrypt, który znajdzie najmniejszy element w tablicy indeksowanej (zawieraj¹cej wy³¹cznie liczby), a nastêpnie zliczy ile razy ta wartoœæ wystêpuje w tablicy.

5. Utwórz tablicê, zawieraj¹c¹ liczby ca³kowite i ci¹gi znaków, np.
$notatki = [2, 5, "hello", 6, "12", "hi", "bye", 15]
oraz dwie puste tablice: $ciagi_znakow i $liczby.
Napisz skrypt, który (przy u¿yciu pêtli) przepisze wszystkie elementy typu string znajduj¹ce siê w tablicy $notatki do tablicy $ciagi_znakow, a elementy typu int do tablicy $liczby.

6. Utwórz dwie tablice: $uslugi i $ceny. Tablica $us³ugi bêdzie zawiera³a nazwy us³ug, np. 
$uslugi = ["Konfiguracja systemu operacyjnego", "Monta¿ podzespo³u", "Instalacja oprogramowania narzêdziowego", "Konfiguracja oprogramowania narzêdziowego"]
W tablicy $ceny pod odpowiednimi indeksami znajd¹ siê ceny poszczególnych us³ug, np.
$ceny = [50, 30, 40, 30]
Utwórz tak¿e zmienn¹ $czy_promocja typu boolean.
Stwórz skrypt, który w zale¿noœci od wartoœci zmiennej $czy_promocja wyœwietli odpowiedni cennik. Je¿eli wartoœci¹ zmiennej $czy_promocja bêdzie true, wszystkie ceny us³ug powinny zostaæ obni¿one o 5% i wyœwietlone w postaci:
Konfiguracja systemu operacyjnego - 47,5 z³
Monta¿ podzespo³u - 28,5 z³
...
Je¿eli zmienna przyjmie wartoœæ false, nale¿y wyœwietliæ pe³ne ceny us³ug.