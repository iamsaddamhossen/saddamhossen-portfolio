import Image from "next/image";
const socialIcons = [
  {
    name: "X",
    url: "https://github.com/saddamhossen",
    image: "/icons/x.svg",
    alt: "Follow me on GitHub",
  },
  {
    name: "GitHub",
    url: "https://github.com/saddamhossen",
    image: "/icons/github.svg",
    alt: "Follow me on GitHub",
  },
  {
    name: "GitHub",
    url: "https://github.com/saddamhossen",
    image: "/icons/github.svg",
    alt: "Follow me on GitHub",
  },
];

export function SocialIcons() {
  return (
    <div className="mb-4 flex justify-between">
      <h2 className="text-lg">Social Media</h2>
      <div className="flex gap-4">
        {socialIcons.map((icon, idx) => (
          <a
            key={icon.name + idx}
            href={icon.url}
            target="_blank"
            rel="noopener noreferrer"
            className="border p-1 rounded-md hover:scale-100 transition duration-3"
          >
            <Image
              src={`social-icons/${icon.name}.svg`}
              width={24}
              height={24}
              alt={icon.alt}
              loading="eager"
            />
          </a>
        ))}
      </div>
    </div>
  );
}
