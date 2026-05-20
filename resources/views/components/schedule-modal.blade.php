<div id="scheduleModal" class="schedule-modal">
    <div class="schedule-modal-container">
        <!-- Background overlay -->
        <div class="schedule-modal-overlay"></div>

        <!-- Modal panel -->
        <div class="schedule-modal-content">
            <div class="schedule-modal-header">
                <h3 class="schedule-modal-title">Class Schedule A</h3>
                <button type="button" class="schedule-modal-close">
                    <span class="schedule-modal-sr-only">Close</span>
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="schedule-modal-body">
                <div class="schedule-table-container">
                    <table class="schedule-table">
                        <thead>
                            <tr id="schedule-table-header">
                                <!-- Default header content; will be replaced dynamically -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="schedule-table-body">
                                <!-- Table body will be updated dynamically -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="schedule-modal-footer">
                <button type="button" class="schedule-modal-close schedule-modal-btn">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>


<style>
/* Schedule Modal Styles - Optimized for mobile responsiveness */
.schedule-modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1050;
    display: none;
    overflow-y: auto;
    outline: 0;
    -webkit-overflow-scrolling: touch;
}

.schedule-modal.active .schedule-modal-content {
    transform: scale(1);
    opacity: 1;
}

.schedule-modal-container {
    display: flex;
    min-height: 100%;
    align-items: center;
    justify-content: center;
    padding: 0.5rem;
    text-align: center;
    pointer-events: none; /* Prevents unwanted drag behavior */
}

.schedule-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(75, 85, 99, 0.75);
    transition: opacity 0.3s ease;
    pointer-events: auto; /* Allows clicks on the overlay */
}

.schedule-modal-content {
    position: relative;
    display: inline-block;
    width: 100%;
    max-width: 95%;
    max-height: 90vh; /* Prevent modal from exceeding viewport height */
    overflow: auto; /* Allow scrolling within the modal if needed */
    text-align: left;
    background-color: white;
    border-radius: 0.5rem;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    transform: scale(0.95);
    opacity: 0.95;
    transition: transform 0.3s ease, opacity 0.3s ease;
    pointer-events: auto; /* Ensures the modal content is clickable */
    cursor: default; /* Prevents any drag cursor */
}

/* Mobile-first approach with progressive enhancement */
.schedule-modal-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.75rem;
    border-bottom: 1px solid #e5e7eb;
}

.schedule-modal-title {
    margin: 0;
    font-size: 1rem;
    font-weight: 500;
    color: #111827;
    line-height: 1.5;
}

.schedule-modal-body {
    position: relative;
    padding: 0.75rem;
    flex: 1 1 auto;
}

.schedule-modal-footer {
    display: flex;
    justify-content: flex-end;
    padding: 0.75rem;
    background-color: #f9fafb;
    border-top: 1px solid #e5e7eb;
}

.schedule-modal-close {
    background: none;
    border: none;
    cursor: pointer;
    color: #6b7280;
    padding: 0.5rem; /* Larger touch target for mobile */
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 44px; /* Minimum touch target size */
    min-height: 44px; /* Minimum touch target size */
}

.schedule-modal-close:hover {
    color: #111827;
}

.schedule-modal-close svg {
    width: 1.25rem;
    height: 1.25rem;
}

.schedule-modal-sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
}

/* Button Styles - Mobile optimized */
.schedule-modal-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    font-weight: 500;
    border-radius: 0.375rem;
    border: 1px solid #d1d5db;
    background-color: white;
    color: #374151;
    cursor: pointer;
    transition: background-color 0.2s;
    min-height: 44px; /* Minimum touch target size */
    min-width: 80px; /* Ensure button is wide enough to tap */
}

.schedule-modal-btn:hover {
    background-color: #f9fafb;
}

/* Schedule Table Styles - Mobile optimized */
.schedule-table-container {
    width: 100%;
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    overflow-x: auto; /* Allow horizontal scrolling if absolutely necessary */
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
}

.schedule-table {
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
}

.schedule-table th {
    padding: 0.5rem 0.25rem;
    font-size: 0.7rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.025em;
    color: #6b7280;
    background-color: #f9fafb;
    text-align: center;
    width: 14.28%; /* Equal width for 7 days */
}

.schedule-table td {
    padding: 0.5rem 0.25rem;
    text-align: center;
    border-top: 1px solid #e5e7eb;
    width: 14.28%; /* Equal width for 7 days */
}

.schedule-badge {
    display: inline-flex;
    padding: 0.15rem 0.3rem;
    font-size: 0.7rem;
    font-weight: 600;
    border-radius: 9999px;
    white-space: normal; /* Allow text to wrap */
}

.schedule-available {
    background-color: #d1fae5;
    color: #065f46;
}

.schedule-unavailable {
    background-color: #f3f4f6;
    color: #4b5563;
}

/* Responsive breakpoints - progressively enhance for larger screens */
@media (min-width: 375px) {
    .schedule-modal-header {
        padding: 0.875rem;
    }
    
    .schedule-modal-body {
        padding: 0.875rem;
    }
    
    .schedule-modal-footer {
        padding: 0.875rem;
    }
    
    .schedule-table th,
    .schedule-table td {
        padding: 0.5rem 0.375rem;
    }
    
    .schedule-badge {
        padding: 0.2rem 0.4rem;
        font-size: 0.75rem;
    }
}

@media (min-width: 425px) {
    .schedule-modal-content {
        max-width: 92%;
    }
    
    .schedule-modal-title {
        font-size: 1.05rem;
    }
    
    .schedule-table th {
        font-size: 0.75rem;
    }
    
    .schedule-table th,
    .schedule-table td {
        padding: 0.625rem 0.5rem;
    }
}

@media (min-width: 640px) {
    .schedule-modal-container {
        padding: 1rem;
    }
    
    .schedule-modal-content {
        max-width: 90%;
    }
    
    .schedule-modal-header {
        padding: 1rem 1.25rem;
    }
    
    .schedule-modal-title {
        font-size: 1.125rem;
    }
    
    .schedule-modal-body {
        padding: 1.25rem;
    }
    
    .schedule-modal-footer {
        padding: 0.75rem 1.25rem;
    }
    
    .schedule-table th {
        padding: 0.75rem 0.75rem;
        font-size: 0.75rem;
    }
    
    .schedule-table td {
        padding: 0.75rem;
    }
    
    .schedule-badge {
        padding: 0.25rem 0.5rem;
        font-size: 0.8rem;
    }
    
    /* Restore full day names on larger screens */
    .schedule-table thead tr th:nth-child(1):before {
        content: "Monday";
    }
    .schedule-table thead tr th:nth-child(2):before {
        content: "Tuesday";
    }
    .schedule-table thead tr th:nth-child(3):before {
        content: "Wednesday";
    }
    .schedule-table thead tr th:nth-child(4):before {
        content: "Thursday";
    }
    .schedule-table thead tr th:nth-child(5):before {
        content: "Friday";
    }
    .schedule-table thead tr th:nth-child(6):before {
        content: "Saturday";
    }
    .schedule-table thead tr th:nth-child(7):before {
        content: "Sunday";
    }
    
    .schedule-table thead tr th:nth-child(1),
    .schedule-table thead tr th:nth-child(2),
    .schedule-table thead tr th:nth-child(3),
    .schedule-table thead tr th:nth-child(4),
    .schedule-table thead tr th:nth-child(5),
    .schedule-table thead tr th:nth-child(6),
    .schedule-table thead tr th:nth-child(7) {
        font-size: 0;
    }
    
    .schedule-table thead tr th:nth-child(1):before,
    .schedule-table thead tr th:nth-child(2):before,
    .schedule-table thead tr th:nth-child(3):before,
    .schedule-table thead tr th:nth-child(4):before,
    .schedule-table thead tr th:nth-child(5):before,
    .schedule-table thead tr th:nth-child(6):before,
    .schedule-table thead tr th:nth-child(7):before {
        font-size: 0.75rem;
    }
    
    /* Restore full badge text on larger screens */
    .schedule-badge.schedule-available:before {
        content: "Available";
    }
    
    .schedule-badge.schedule-available {
        font-size: 0;
    }
    
    .schedule-badge.schedule-available:before {
        font-size: 0.8rem;
    }
}

@media (min-width: 768px) {
    .schedule-modal-content {
        max-width: 80%;
    }
    
    .schedule-modal-header {
        padding: 1.25rem 1.5rem;
    }
    
    .schedule-modal-body {
        padding: 1.5rem;
    }
    
    .schedule-modal-footer {
        padding: 0.75rem 1.5rem;
    }
    
    .schedule-table th {
        padding: 0.75rem 1rem;
    }
    
    .schedule-table td {
        padding: 1rem;
    }
    
    .schedule-badge {
        padding: 0.25rem 0.75rem;
        font-size: 0.875rem;
    }
}

@media (min-width: 1024px) {
    .schedule-modal-content {
        max-width: 70%;
    }
    
    .schedule-table th,
    .schedule-table td {
        padding: 1rem 1.5rem;
    }
}

@media (min-width: 1280px) {
    .schedule-modal-content {
        max-width: 60%;
    }
}

/* Handle landscape orientation on mobile */
@media (max-height: 500px) and (orientation: landscape) {
    .schedule-modal-content {
        max-height: 85vh;
    }
    
    .schedule-modal-header {
        padding: 0.5rem 0.75rem;
    }
    
    .schedule-modal-body {
        padding: 0.5rem 0.75rem;
    }
    
    .schedule-modal-footer {
        padding: 0.5rem 0.75rem;
    }
    
    .schedule-table th,
    .schedule-table td {
        padding: 0.5rem;
    }
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('scheduleModal');
        const closeButtons = modal.querySelectorAll('.schedule-modal-close');
    
        function closeModal() {
            modal.classList.remove('active');
            setTimeout(() => {
                modal.style.display = 'none';
                document.body.style.overflow = '';
            }, 300);
        }
    
        closeButtons.forEach(button => {
            button.addEventListener('click', closeModal);
        });
    
        modal.addEventListener('click', function(event) {
            if (event.target === modal || event.target.classList.contains('schedule-modal-overlay')) {
                closeModal();
            }
        });
    
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && modal.style.display === 'block') {
                closeModal();
            }
        });
    
        // List of all days
        const allDays = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
    
        window.openScheduleModal = function(title, availableDays) {
            const modalTitle = modal.querySelector('.schedule-modal-title');
            if (modalTitle) {
                modalTitle.textContent = title;
            }
            
            // Update table header
            const headerRow = document.getElementById('schedule-table-header');
            if (headerRow) {
                headerRow.innerHTML = ''; 
                allDays.forEach(day => {
                    const th = document.createElement('th');
                    th.textContent = day;
                    headerRow.appendChild(th);
                });
            }
    
            // Update table body
            const bodyRow = document.getElementById('schedule-table-body');
            if (bodyRow) {
                bodyRow.innerHTML = ''; 
                allDays.forEach(day => {
                    const td = document.createElement('td');
                    const span = document.createElement('span');
                    
                    // Check if the day is in the availableDays array
                    if (availableDays.includes(day)) {
                        span.classList.add('schedule-badge', 'schedule-available');
                        span.textContent = 'Yes';
                    } else {
                        span.classList.add('schedule-badge', 'schedule-unavailable');
                        span.textContent = 'No';
                    }
    
                    td.appendChild(span);
                    bodyRow.appendChild(td);
                });
            }
    
            // Show modal
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
            setTimeout(() => {
                modal.classList.add('active');
            }, 10);
        };
    });
    </script>
    
    
    
