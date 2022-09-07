<x-tests.app>
    <x-slot name="header">
        header1
    </x-slot>
    test1
    <x-tests.card title="タイトル1"  :message="$message" />
    <x-tests.card title="タイトル1"  :message="$message"  class="bg-red-300" />
    <x-test-class-base message="messssage" defualtMessage="change"/>
</x-tests.app>
