import React from 'react';

export default ({ items = [] }) => {

  if (items.length === 0) {
    return <></>
  }

  return <section className='' aria-labelledby='items_section_heading'>
    <h2 id='items_section_heading' className="mb-4 text-gray-500">Items</h2>

    {items.map(item => 
      <article key={item.id} className='flex gap-x-4 p-2 mb-4 from-blue-700 to-orange-600 bg-gradient-to-l text-gray-50 rounded-md'>
        <h3 className='text-white border-b-2 border-white'>{item.name}</h3>
        <div>last: {item.done_at}</div>
      </article>
    )}

  </section>
}
