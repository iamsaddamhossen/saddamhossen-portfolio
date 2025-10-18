"use client";

import { motion } from "framer-motion";
import { FaQuoteLeft } from "react-icons/fa";

const testimonials = [
  {
    quote:
      "Saddam built our website with clean, maintainable code. Communication was perfect, and the site is lightning-fast.",
    name: "Jer Fortenberry",
    company: "DeedClaim",
  },
  {
    quote:
      "Highly skilled WordPress developer. Delivered ahead of schedule and exceeded expectations.",
    name: "Ian Hunter",
    company: "NexRep",
  },
  {
    quote:
      "Saddam’s custom plugins and themes are robust, fast, and easy to maintain. I highly recommend him.",
    name: "Client Name",
    company: "Company",
  },
];

export function Testimonial() {
  return (
    <section className="relative w-full bg-gradient-to-b from-gray-50 via-white to-gray-50 py-24 overflow-x-hidden">
      {/* Decorative background gradient blur */}
      <div className="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_30%_10%,rgba(35,167,191,0.1),transparent_70%)]" />

      <div className="max-w-[1200px] mx-auto px-6 md:px-10">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
            What My Clients Say
          </h2>
          <p className="text-gray-600 text-lg max-w-2xl mx-auto">
            Real feedback from clients who trusted me to bring their ideas to
            life.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
          {testimonials.map((t, i) => (
            <motion.div
              key={i}
              whileHover={{ y: -6, scale: 1.02 }}
              transition={{ duration: 0.3 }}
              className="relative p-8 bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100"
            >
              <FaQuoteLeft className="text-[#23A7BF] text-3xl mb-6 opacity-80" />
              <p className="italic text-gray-700 leading-relaxed mb-6">
                “{t.quote}”
              </p>
              <div>
                <p className="font-semibold text-gray-900">{t.name}</p>
                <p className="text-gray-500 text-sm">{t.company}</p>
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
}
