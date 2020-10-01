<x-grok::grok_page_layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Grok
        </h2>
    </x-slot>
    <div class="mt-4"/>
    <x-grok::action-section title="Guides" description="Explainations of Stuff">
        <x-slot name="content">
    <a href="/grok/grok">Grok</a>
    <p/>
    <a href="/grok/jetstream">Jetstream</a>
    <p/>
    <a href="/grok/livewire">LiveWire</a>
    <p/>
    <a href="/grok/tassy/looks">Tassy/UiLooks</a>
    <p/>
    <a href="/grok/tassy/groks_tasbranding">Tassy/Branding</a>
    <p/>
    <a href="/grok/tassy/glances">Tassy/UiGlances</a>
    {{--            Hey - how could we make this auto-discoverable? --}}

        </x-slot>>
    </x-grok::action-section>

    <div class="mt-4"/>
     <x-grok::action-section  title="Todo" description="Explainations of Stuff">
          <x-slot name="content">
                <pre>
                    ------- Laravel JetStream Demo ----------
                    [x] Titled Page
                    [x] Page sections/Form Sections
                    [x] Form Section Action
                    [x] Form Section Form
                    [x] Confirmation Modal
                    [x] Dialog Modal
                    (?Maybe) Form that works on page, or in modal
                    [x] Polling chunk
                    [x] Form message flash
                    [X] Lists
                        [X] Ordered
                        [X] Unordered
                    [X] Flash Messages
                    (-> Later) Quotes
                    (--> Later ) Code

                    ------- Tall & Sassy UI Blocks skills ----------


                    -- Data --
                    [ ] Tables
                    [ ] Reveals
                    [ ] Stacked Progress Bars (usage: Class enrollment)

                    ------- Tall & Sassy Page Navigation ----------
                    [ ] generic admin panel (Use Tall2, its pretty good)
                        [ ]     Top, Bottom, Dev
                                This should use Livewire's new querystring system so refresh and back work properly.
                                as general concept of front end and admin ('dashboard') side, similiar to wordpress

                    -------- Core Capabilities ---------------
                    (Much Later) Role impersination
                    (Much Later) New tenant creation.... and tenant management
                    (Later) Tool on/off for the app
                    Short-term broadcast messages
                    Persistent broadcast messages
                    Simple Branding


                    -------- Core includes Infrastructure Tools ----
                    [X] Periscope & Debug Stuff
                    [ ] Roles (users can have more than one role)
                            [-> ] App Owner (Landlord)
                            [-> ] App Developer (Maintenance staff)
                            [ ] Tenant Owner (Think, Restaurant owner in a complex)
                            [ ] Tenant Staff (Think restaurant staff)
                            [ ] Tenant Subscriber (Think restaurant guests)
                            [X] Guest
                            [X] User


                    -------- Core Tools ---------------
                    [ ] Messaging (Look for existing tools)
                        [ ] App Owner to: Role(s)
                            [ ] Currently Logged In
                            [ ] Until X
                            [ ] Until Read
                        [ ] Tenant Owner: Role(s)... (above)
                    [ ] User Invitations w/ role and management
                        [ ] Invite individuals
                        [ ] Invite Roster
                    [ ] Basic Help Tickets (look for existing tools for built-in and integrations w/ zendesk)


                    [--> ] Teams & Multi-tenant (think, a parent can belong to three families across several schools. Two families might go to same school)
                    [--> ] one-on-one communication
                    (??  ) e-commerce, maybe this is per-app?

                    Tall & Sassy Branding
                        [ ] Branding Config from tall2
                        [ ] Footer on front and admin/dashboard
                        (??  ) App-Level Terminology
                        (??  ) Tenant-Level Terminology

                    Tall & Sassy Page Flow
                        [ ] admin/Dashboard
                        [ ] admin/People
                        [ ] admin/People/Users
                        [ ] About Page
                        [ ] Config

                    Tall & Sassy Security
                        [ ] Email Confirmation
                        [ ] Two-Factor force-confirm before setting
                        [ ] Optionally Disable self-registration

                    -------- Plugins ---------------
                    Events
                        Tickets


                    -------- App --------------------
                    School Twist
                    ============
                        Config:
                            Multi-Tenant
                            Teams
                            Terminology
                        Plugins
                            Events
                            Tickets
                            Ecommerce
                            Video
                        Roles
                            Attendee
                            Booker
                            Instructor
                            Parent
                            Attendee



</pre>
          </x-slot>
     </x-grok::action-section>

</x-grok::grok_page_layout>
