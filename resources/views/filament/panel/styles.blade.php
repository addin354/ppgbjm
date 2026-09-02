{{-- Gaya panel: sidebar lebih jelas, grup navigasi lebih terbaca --}}
<style>
    .fi-main-sidebar {
        background: linear-gradient(165deg, #fffbeb 0%, #ffffff 42%, #ffffff 100%);
        border-inline-end: 1px solid rgb(253 230 138 / 0.65);
        box-shadow: inset -1px 0 0 rgb(255 255 255 / 0.6);
    }

    .fi-sidebar-header {
        padding-block: 0.75rem;
    }

    .fi-sidebar-header .fi-logo img {
        width: auto;
        max-width: min(100%, 13.5rem);
        object-fit: contain;
        object-position: left center;
    }

    .fi-sidebar-group-label {
        font-size: 0.6875rem;
        letter-spacing: 0.055em;
        text-transform: uppercase;
        font-weight: 600;
        color: rgb(87 83 78);
        opacity: 0.95;
    }

    .fi-sidebar-item-label {
        font-weight: 500;
    }

    .fi-sidebar-item-button {
        border-radius: 0.5rem;
        transition: background-color 0.15s ease, box-shadow 0.15s ease;
    }

    .fi-sidebar-group .fi-sidebar-item.fi-active .fi-sidebar-item-button {
        box-shadow: 0 1px 2px rgb(0 0 0 / 0.06);
    }
</style>
